<?php

namespace App\Http\Controllers;

use App\Models\Acueductos;
use App\Models\ImageAcueductos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AcueductosController extends Controller
{
    public function index(){

        $acueductos = Acueductos::query()
            ->where('estatus', true)
            ->orderBy('created_at', 'desc')
            ->with('imagenesAcueductos')
            ->get();

        return view('acueductos',compact('acueductos'));
    }

    public function details(Acueductos $acueducto){

        return view('acueductos.detailAcueducto',compact('acueducto'));
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
        return redirect()->route('index_acueducto');
        // } catch (\Exception $e) {
        //     // dd($e);
        // }
    }

    //Eliminar acueducto.
    public function destroy(Acueductos $acueducto){

        $imagesAcueducto = ImageAcueductos::query()
            ->where('idAcueductos', $acueducto->id)
            ->get();

        foreach ($imagesAcueducto as $imageAcueducto) {
            $imageAcueducto->delete();
        }

        Storage::deleteDirectory('public/'.$acueducto->id.'-'.$acueducto->nombre);

        $acueducto->delete();

        return back();
    }

    //Editar acueducto.
    public function edit(Acueductos $acueducto){

        return view('acueductos.editAcueductos', compact('acueducto'));

    }

    //Actualizar acueducto.
    public function update(Request $request, Acueductos $acueducto ){

        //Validar acueducto
        $fields = $request->validate([
            'nombre' => ['required', 'max:255'],
            'municipio' => ['required', 'max:255'],
            'ubicacion' => ['required', 'max:255'],
            'descripcion' => ['required', 'max:255'],
            'fotos' => ['required','array'],
            'fotos.*' => ['image','mimes:jpg,png,jpeg','dimensions:min_width=100,min_height=100','max:2048'],
        ]);

        //Actualizar acueducto
        $acueducto->nombre = $fields['nombre'];
        $acueducto->municipio = $fields['municipio'];
        $acueducto->ubicacion = $fields['ubicacion'];
        $acueducto->descripcion = $fields['descripcion'];
        $acueducto->save();

        //Obtener imagenes de acueducto
        $imagesAcueducto = ImageAcueductos::query()
            ->where('idAcueductos', $acueducto->id)
            ->get();

        //Eliminar imagenes
        foreach ($imagesAcueducto as $imageAcueducto) {
            $imageAcueducto->delete();
        }
        Storage::deleteDirectory('public/'.$acueducto->id.'-'.$acueducto->nombre);

        //Insertar imagenes de acueducto
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

        return redirect()->route('index_acueducto');
    }
}
