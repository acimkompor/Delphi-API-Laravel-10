<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class PegawaiController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'sukses',
            'data' => DataPegawai::all(),
        ], 200);
    }

    public function addPegawai(Request $request)
    {
        $idReligion = $request->id_religion;
        $nama = $request->nama;
        $telepon = $request->telepon;
        $alamat = $request->alamat;

        $file_foto = $request->file("image");
        $extention = $file_foto->extension();
        $name_foto = Str::password(12, symbols: false) . "." . $extention;

        try {
            // upload image to folder public->assets->img->project
            $upload = $file_foto->move(public_path('assets/img/project'), $name_foto);
            if ($upload) {
                $insert = DataPegawai::create([
                    "nama" => $nama,
                    "telepon" => $telepon,
                    "alamat" => $alamat,
                    "agama_id" => $idReligion,
                    "image_url" => $name_foto,
                ]);

                return response()->json([
                    'status' => 'sukses',
                    'message' => 'Sukses insert data'
                ], 200);

            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 401);
        }

    }

    public function editPegawai(Request $request)
    {
        $id = $request->id;
        $idReligion = $request->id_religion;
        $nama = $request->nama;
        $telepon = $request->telepon;
        $alamat = $request->alamat;
        
        if ($request->image) {

            $img_old = public_path("/assets/img/project/" . $request->foto);
            // proses delete image lama
            File::delete($img_old);
            
            $file_foto = $request->file("image");
            $extention = $file_foto->extension();
            $name_foto = Str::password(12, symbols: false) . "." . $extention;
            // dd($file_foto->getClientOriginalName());

            Try {
                $upload = $file_foto->move(public_path('assets/img/project'), $name_foto);
                if ($upload) {
                    $update = DataPegawai::where(
                        "id", $id
                    )->update([
                        "nama" => $nama,
                        "agama_id" => $idReligion,
                        "telepon" => $telepon,
                        "alamat" => $alamat,
                        "image_url" => $name_foto,
                    ]);

                    return response()->json([
                        'status' => 'sukses',
                        'message' => 'Sukses update data'
                    ], 200);
                }

            } catch (\Throwable $th) {
                return response()->json([
                    'status' => 'error',
                    'message' => $th->getMessage()
                ], 401);
            }
            
        } else {
            $update = DataPegawai::where(
                "id", $id
            )->update([
                "nama" => $nama,
                "agama_id" => $idReligion,
                "telepon" => $telepon,
                "alamat" => $alamat,
            ]);

            return response()->json([
                'status' => 'sukses',
                'message' => 'Sukses update data'
            ], 200);
        }

        
    }

    public function deletePegawai(Request $request)
    {
        $img_old = public_path("/assets/img/project/" . $request->foto);
        // proses delete image lama
        File::delete($img_old);

        $delete = DataPegawai::where('id', $request->id)->delete();
        return response()->json([
            'status' => 'sukses',
            'message' => 'Sukses hapus data'
        ], 200);
    }
}
