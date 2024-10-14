<?php

namespace App\Http\Controllers;

use App\Models\Acueductos;
use App\Models\ImageAcueductos;
use Illuminate\Http\Request;

class AcueductosController extends Controller
{
    public function store(Request $request){

        // dd($request);

        //Validar store
        // $fields = $request->validate([
        //     'nombre' => ['required', 'max:255'],
        //     'municipio' => ['required', 'max:255'],
        //     'ubicacion' => ['required', 'max:255'],
        //     'descripcion' => ['required', 'max:255'],
        //     'foto' => ['required','array'],
        //     'foto.*' => ['image','mimes:jpg,png,jpeg','dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000','max:2048'],
        //     'estatus' => ['required', 'max:255'],
        // ]);

        // dd($fields);

        //Registrar acueducto
        $acueducto = Acueductos::create([
            'nombre' => $request->input('nombre'),
            'municipio' => $request->input('municipio'),
            'ubicacion' => $request->input('ubicacion'),
            'descripcion' => $request->input('descripcion'),
            'estatus' => $request->input('estatus')
        ]);

        dd($acueducto);

        //Guarda imagen de acueducto
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->store('posts', 'public');

                $imageAcueducto = new ImageAcueductos();
                $imageAcueducto->idAcueductos = $acueducto->id;
                $imageAcueducto->url = $filename;
                $imageAcueducto->save();
            }
        }

        //Redirect
        return redirect()->route('home');
    }


}
