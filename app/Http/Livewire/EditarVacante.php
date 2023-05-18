<?php

namespace App\Http\Livewire;
use App\Models\Vacante;
use Livewire\Component;
use App\Models\Carrera;
class EditarVacante extends Component
{
    public $vacante_id;
    public $titulo;
    public $salario;
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

    ];


public function mount(Vacante $vacante){
    $this ->vacante_id = $vacante->id;
    $this ->titulo = $vacante->titulo;
    $this ->Salario = $vacante->salario;
    $this ->carrera = $vacante->carrera_id;
    $this ->empresa = $vacante->empresa;
    $this ->descripcion = $vacante->descripcion;
    $this ->imagen = $vacante->imagen;

}
public function editarVacante()
{
    $datos = $this->validate();


    $vacante = Vacante::find($this->vacante_id);
    $vacante->titulo = $datos ['titulo'];
    $vacante->salario = $datos ['Salario'];
    $vacante->carrera_id = $datos ['carrera'];
    $vacante->empresa = $datos ['empresa'];
    $vacante->descripcion = $datos ['descripcion'];

    $vacante->save();
    session()->flash('mensaje', 'La vacante se actualizo correctamente');
    return redirect()->route('vacantes.index');
}

    public function render()
    {

         //consultar a la base de datos

       $carreras = Carrera::all();

       return view('livewire.editar-vacante', [
           'carreras' => $carreras
       ]);

    }
}
