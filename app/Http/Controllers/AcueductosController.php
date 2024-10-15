<?php

namespace App\Http\Controllers;

use App\Models\Acueductos;
use App\Models\ImageAcueductos;
use Illuminate\Http\Request;

class AcueductosController extends Controller
{
    public function index(){

        $acueductos = Acueductos::all();

        return view('acueductos',['acueductos'=>$acueductos]);

    }

    public function store(Request $request){

        // try {
            $fields = $request->validate([
                'nombre' => ['required', 'max:255'],
                'municipio' => ['required', 'max:255'],
                'ubicacion' => ['required', 'max:255'],
                'descripcion' => ['required', 'max:255'],
                'fotos' => ['required','array'],
                'fotos.*' => ['image','mimes:jpg,png,jpeg','dimensions:min_width=100,min_height=100','max:2048'],
            ]);

            //Registrar acueducto
            $acueducto = Acueductos::create([
            'nombre' => $request->input('nombre'),
            'municipio' => $request->input('municipio'),
            'ubicacion' => $request->input('ubicacion'),
            'descripcion' => $request->input('descripcion'),
        ]);

        //Guarda imagen de acueducto
        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $image) {
                $filename = $image->store($acueducto->id.'-'.$acueducto->nombre, 'public');

                $imageAcueducto = new ImageAcueductos();
                $imageAcueducto->idAcueductos = $acueducto->id;
                $imageAcueducto->nombre = $filename;
                $imageAcueducto->formato = $image->extension();
                $imageAcueducto->save();
            }
        }

        //Redirect
        return redirect()->route('acueductos');
        // } catch (\Exception $e) {
        //     // dd($e);
        // }
    }
}
