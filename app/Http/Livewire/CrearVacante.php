<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Carrera;
use Illuminate\Validation\validator;
use App\Models\Vacante;



class CrearVacante extends Component
{

    public $titulo;
    public $Salario;
    public $carrera;
    public $empresa;
    public $descripcion;
    public $imagen;
    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required',
        'Salario' => 'required',
        'carrera' => 'required',
        'empresa' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required'
    ];

    public function crearVacante()
    {

        $datos=$this->validate();

       $imagen = $this->imagen->store('public/vacantes');
        $datos['imagen'] = str_replace('public/vacantes/','',$imagen);
    // dd($nombre_imagen);
        Vacante::create([
        'titulo'=> $datos['titulo'],
        'Salario' => $datos['Salario'],
        'carrera_id'=> $datos['carrera'],
        'empresa'=> $datos['empresa'],
        'descripcion'=> $datos['descripcion'],
        'imagen' => $datos['imagen'],
        'user_id' => auth()->user()->id,
        ]);

        session()->flash('mensaje','La vacante se publico correctamente');
        return redirect()->route('vacantes.index');

    }

    public function render()
    {
        //consultar a la base de datos

       $carreras = Carrera::all();
        return view('livewire.crear-vacante', [
            'carreras' => $carreras
        ]);

    }
}
