<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Kelulusan;
use App\Models\Dosen;


class LandingController extends Controller
{
    public function berita_rpl()
    {
        $data = [
            'listberita' => 'judul_berita'
        ];
        return view('landing.berita_rpl', $data);
    }

    public function profile_dosen()
    {
        return view('landing.profile_dosen');
    }

    public function home()
    {
        return view('landing.home');
    }

    public function profile_kelulusan_rpl()
    {
        return view('landing.profile_kelulusan_rpl');
    }

    public function inputberita()
    {
        return view('landing.inputberita');
    }

    public function inputdosen()
    {
        return view('landing.inputdosen');
    }

    public function inputkelulusan()
    {
        return view('landing.inputkelulusan');
    }

    public function postBerita(Request $request)
    {
        if ($request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ])) {


            $berita = new Berita;
            $berita->judul_berita = $request->judul;
            $berita->isi_berita = $request->isi;

            if ($berita->save()) {
                return redirect('/landing/inputberita')->with('success', 'Berita berhasil ditambahkan');
            } else {
                return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
            }
        }
    }

    public function postKelulusan(Request $request)
    {
        if ($request->validate([
            'profil' => 'required',
            'capaian' => 'required',
        ])) {


            $kelulusan = new Kelulusan;
            $kelulusan->profil = $request->profil;
            $kelulusan->capaian = $request->capaian;

            if ($kelulusan->save()) {
                return redirect('/landing/inputkelulusan')->with('success', 'Profil kelulusan berhasil ditambahkan');
            } else {
                return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
            }
        }
    }

    public function postDosen(Request $request)
    {
        if ($request->validate([
            'nip' => 'required',
            'nama_dosen' => 'required',
            'nidn' => 'required',
            'program_studi' => 'required'
        ])) {


            $dosen = new Dosen;
            $dosen->nip = $request->nip;
            $dosen->nama_dosen = $request->nama_dosen;
            $dosen->nidn = $request->nidn;
            $dosen->program_studi = $request->program_studi;

            if ($dosen->save()) {
                return redirect('/landing/inputdosen')->with('success', 'data dosen berhasil ditambahkan');
            } else {
                return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
            }
        }
    }
}
