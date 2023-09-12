<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\TemporaryImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();

        $images = [];

        foreach ($slides as $key => $value) {
            $files = Storage::files("public/slide/" . $value->id);
            $count = count($files);

            for ($i = 1; $i <= $count; $i++) {
                $images[$key][$i] = Storage::url($files[$i - 1]);
            }
        }

        return view("admin.slide.index", compact("slides", "images"));
    }

    public function create()
    {
        return view("admin.slide.create");
    }

    public function store(Request $request)
    {
        $title = $request->input("title");
        $description = $request->input("description");

        $tempFolder = session("folder");
        $tempFilename = session("filename");

        $tempFolderbg = session("folderbg");
        $tempFilenamebg = session("filenamebg");

        $slide = new Slide();

        $slide->title = $title;
        $slide->description = $description;
        $slide->image = "-";
        $slide->bg_image = "-";
        $slide->save();

        $ext = "";

        for ($i = 0; $i < count($tempFolder); $i++) {
            $temporaryImage = TemporaryImage::where("folder", $tempFolder[$i])
                ->where("image", $tempFilename[$i])
                ->first();

            if ($temporaryImage) {
                $path =
                    storage_path() .
                    "/app/files/tmp/" .
                    $temporaryImage->folder .
                    "/" .
                    $temporaryImage->image;
                if (File::exists($path)) {
                    $newPath = "public/slide/" . $slide->id;

                    $ext = pathinfo(
                        storage_path() .
                            "/app/files/tmp/" .
                            $temporaryImage->folder .
                            "/" .
                            $temporaryImage->image,
                        PATHINFO_EXTENSION
                    );

                    try {
                        Storage::move(
                            "files/tmp/" .
                                $temporaryImage->folder .
                                "/" .
                                $temporaryImage->image,
                            $newPath . "/image." . $ext
                        );
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }

                    File::delete($path);
                    rmdir(
                        storage_path("app/files/tmp/" . $temporaryImage->folder)
                    );
                    $temporaryImage->delete();
                }
            }
        }

        $slide->image = Storage::url(
            "public/slide/" . $slide->id . "/image." . $ext
        );

        for ($i = 0; $i < count($tempFolderbg); $i++) {
            $temporaryImage = TemporaryImage::where("folder", $tempFolderbg[$i])
                ->where("image", $tempFilenamebg[$i])
                ->first();

            if ($temporaryImage) {
                $path =
                    storage_path() .
                    "/app/files/bgtmp/" .
                    $temporaryImage->folder .
                    "/" .
                    $temporaryImage->image;
                if (File::exists($path)) {
                    $newPath = "public/slide/" . $slide->id;

                    $ext = pathinfo(
                        storage_path() .
                            "/app/files/bgtmp/" .
                            $temporaryImage->folder .
                            "/" .
                            $temporaryImage->image,
                        PATHINFO_EXTENSION
                    );

                    try {
                        Storage::move(
                            "files/bgtmp/" .
                                $temporaryImage->folder .
                                "/" .
                                $temporaryImage->image,
                            $newPath . "/bgimage." . $ext
                        );
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }

                    File::delete($path);
                    rmdir(
                        storage_path(
                            "app/files/bgtmp/" . $temporaryImage->folder
                        )
                    );
                    $temporaryImage->delete();
                }
            }
        }
        $slide->bg_image = Storage::url(
            "public/slide/" . $slide->id . "/bgimage." . $ext
        );
        $slide->save();

        session()->forget("folder");
        session()->forget("filename");
        session()->forget("folderbg");
        session()->forget("filenamebg");

        return redirect()
            ->route("slide")
            ->with("success", "Slide created successfully.");
    }

    public function edit($id)
    {
        $slide = Slide::find($id);

        $files = Storage::files("public/slide/" . $slide->id);
        $count = count($files);

        $images = [];

        for ($i = 1; $i <= $count; $i++) {
            $images[$i] = Storage::url($files[$i - 1]);
        }

        return view("admin.slide.edit", compact("slide", "images"));
    }

    public function update(Request $request)
    {
        $slide = Slide::find($request->input("id"));

        $title = $request->input("title");
        $description = $request->input("description");

        $slide->title = $title;
        $slide->description = $description;

        $tempFolder = session("folder");
        $tempFilename = session("filename");

        $tempFolderbg = session("folderbg");
        $tempFilenamebg = session("filenamebg");

        $ext = "";

        if ($request->image) {
            $oldImage = $slide->image;

            //convert path from storage to public
            $path = str_replace("storage", "public", $oldImage);

            if (Storage::exists($path)) {
                Storage::delete($path);
            }

            for ($i = 0; $i < count($tempFolder); $i++) {
                $temporaryImage = TemporaryImage::where(
                    "folder",
                    $tempFolder[$i]
                )
                    ->where("image", $tempFilename[$i])
                    ->first();

                if ($temporaryImage) {
                    $path =
                        storage_path() .
                        "/app/files/tmp/" .
                        $temporaryImage->folder .
                        "/" .
                        $temporaryImage->image;
                    if (File::exists($path)) {
                        $newPath = "public/slide/" . $slide->id;

                        $ext = pathinfo(
                            storage_path() .
                                "/app/files/tmp/" .
                                $temporaryImage->folder .
                                "/" .
                                $temporaryImage->image,
                            PATHINFO_EXTENSION
                        );

                        try {
                            Storage::move(
                                "files/tmp/" .
                                    $temporaryImage->folder .
                                    "/" .
                                    $temporaryImage->image,
                                $newPath . "/image." . $ext
                            );
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }

                        File::delete($path);
                        rmdir(
                            storage_path(
                                "app/files/tmp/" . $temporaryImage->folder
                            )
                        );
                        $temporaryImage->delete();
                    }
                }
            }

            $slide->image = Storage::url(
                "public/slide/" . $slide->id . "/image." . $ext
            );
        }

        if ($request->bgimage) {
            $oldImage = $slide->bg_image;

            //convert path from storage to public
            $path = str_replace("storage", "public", $oldImage);

            if (Storage::exists($path)) {
                Storage::delete($path);
            }

            for ($i = 0; $i < count($tempFolderbg); $i++) {
                $temporaryImage = TemporaryImage::where(
                    "folder",
                    $tempFolderbg[$i]
                )
                    ->where("image", $tempFilenamebg[$i])
                    ->first();

                if ($temporaryImage) {
                    $path =
                        storage_path() .
                        "/app/files/bgtmp/" .
                        $temporaryImage->folder .
                        "/" .
                        $temporaryImage->image;
                    if (File::exists($path)) {
                        $newPath = "public/slide/" . $slide->id;

                        $ext = pathinfo(
                            storage_path() .
                                "/app/files/bgtmp/" .
                                $temporaryImage->folder .
                                "/" .
                                $temporaryImage->image,
                            PATHINFO_EXTENSION
                        );

                        try {
                            Storage::move(
                                "files/bgtmp/" .
                                    $temporaryImage->folder .
                                    "/" .
                                    $temporaryImage->image,
                                $newPath . "/bgimage." . $ext
                            );
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }

                        File::delete($path);
                        rmdir(
                            storage_path(
                                "app/files/bgtmp/" . $temporaryImage->folder
                            )
                        );
                        $temporaryImage->delete();
                    }
                }
            }
            $slide->bg_image = Storage::url(
                "public/slide/" . $slide->id . "/bgimage." . $ext
            );
        }

        $slide->save();
        return redirect()
            ->route("slide")
            ->with("success", "Slide updated successfully.");
    }

    public function delete($id)
    {
        $slide = Slide::find($id);

        $oldImage = $slide->image;

        //convert path from storage to public
        $path = str_replace("storage", "public", $oldImage);

        if (Storage::exists($path)) {
            Storage::delete($path);
        }

        $oldImage = $slide->bg_image;

        //convert path from storage to public
        $path = str_replace("storage", "public", $oldImage);

        if (Storage::exists($path)) {
            Storage::delete($path);
        }

        $slide->delete();

        return redirect()
            ->route("slide")
            ->with("success", "Slide deleted successfully.");
    }
}
