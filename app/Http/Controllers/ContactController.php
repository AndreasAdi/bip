<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pesan;

class ContactController extends Controller
{
    function index()
    {
        return view("admin.pesan.index");
    }

    function handleKirimPesan(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $company = $request->input("company");
        $message = $request->input("message");

        $pesan = new Pesan();
        $pesan->name = $name;
        $pesan->email = $email;
        $pesan->phone = $phone;
        $pesan->company = $company;
        $pesan->message = $message;
        $pesan->save();

        if ($pesan) {
            return redirect()
                ->route("contact")
                ->with("success", "Terima kasih, pesan anda telah terkirim");
        } else {
            return redirect()
                ->route("contact")
                ->with("error", "Maaf, pesan anda gagal terkirim");
        }
    }
}
