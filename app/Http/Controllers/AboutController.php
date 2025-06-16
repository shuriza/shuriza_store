<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    // Menampilkan halaman about ke semua user
    public function show()
    {
        $admin = User::where('role_id', 1)->first();

        return view('about', compact('admin'));
    }


    // Form edit (hanya untuk admin)
    public function edit()
    {
        $user = auth()->user(); // atau: User::find(auth()->id());

        return view('admin.edit_about', compact('user'));
    }


    // Simpan perubahan
    public function update(Request $request)
    {
        $user = auth()->user(); // atau: User::find(auth()->id());

        $user->about = $request->input('about');
        $user->about_produk_text = $request->input('about_produk_text');
        $user->about_petani_text = $request->input('about_petani_text');

        // Upload gambar produk
        if ($request->hasFile('about_produk_image')) {
            $image = $request->file('about_produk_image');
            $filename = time() . '_produk_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img'), $filename);
            $user->about_produk_image = $filename;
        }

        // ✅ Upload gambar petani
        if ($request->hasFile('about_petani_image')) {
            $image = $request->file('about_petani_image');
            $filename = time() . '_petani_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img'), $filename);
            $user->about_petani_image = $filename;
        }

        $user->save(); // wajib disimpan setelah semua update

        return redirect()->route('about')->with('success', 'About updated!');
    }


}
