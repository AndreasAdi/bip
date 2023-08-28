<?php

namespace App\Http\Controllers;

use App\Models\TemporaryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        //process upload from filepond
        $file = $request->file('image');
        $filename = hexdec(uniqid()) . '.' . $file->extension();
        $folder = uniqid() . '-' . now()->timestamp;

        $file->storeAs('files/tmp/' . $folder, $filename);

        TemporaryImage::create([
            'folder' => $folder,
            'image' => $filename
        ]);

        Session::push('folder', $folder); //save session  folder

        Session::push('filename', $filename); //save session filename

        return $filename;
    }

    public function destroy(Request $request)
    {
        //check data from temporaryImage
        $db = TemporaryImage::where('image', $request->image)->first();

        if ($db) {
            $path = storage_path() . '/app/files/tmp/' . $db->folder . '/' . $db->image;
            if (File::exists($path)) {
                File::delete($path);
                rmdir(storage_path('app/files/tmp/' . $db->folder));

                $db->delete();
                Session::forget('folder');
                Session::forget('filename');
                return 'deleted';
            } else {
                return 'not found';
            }
        }
    }
}
