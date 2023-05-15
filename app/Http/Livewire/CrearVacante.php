<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Carrera;
use Illuminate\Validation\validator;


class CrearVacante extends Component
{

    public $titulo;
    public $Salario;
    public $carrera;
    public $empresa;
    public $descripcion;
    public $imagen;

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
