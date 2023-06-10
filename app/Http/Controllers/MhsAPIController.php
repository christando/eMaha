<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Dotenv\Regex\Success;
use Illuminate\Mail\Message;
use Symfony\Component\VarDumper\Cloner\Data;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();

        return response()->json([
            "success" => true,
            "message" => "No Error occurred",
            "data" => $mhs
        ], 200);
    }

    public function create(Request $request)
    {

        $mhs = Mahasiswa::create([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'prodi'=>$request->prodi,
            'minat'=>$request->minat
        ]);

        if($mhs){
            return response()->json([
                'success' => true,
                'message' => "Successfully added",
                'data' => $mhs
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "failed to add the data",
            ],400);
        }
    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'prodi'=>$request->prodi,
            'minat'=>$request->minat
        ]);
        if($mhs){
            return response()->json([
                'success' => true,
                'message' => "data updated successfully",
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "data failed to update",
            ],400);
        }

    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => "data deleted successfully"
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "data failed to delete"
            ],400);
        }

    }
}
