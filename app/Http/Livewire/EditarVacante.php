<?php

namespace App\Http\Livewire;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Carrera;
use Illuminate\Support\Carbon;
class EditarVacante extends Component
{
    public $vacante_id;
    public $titulo;
    public $salario;
    public $carrera;
    public $empresa;
    public $descripcion;
    public $imagen;
    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required',
        'Salario' => 'required',
        'carrera' => 'required',
        'empresa' => 'required',
        'descripcion' => 'required',
        'imagen_nueva' => 'nullable'

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
    if($this->imagen_nueva){
        $imagen = $this-> imagen_nueva->store('public/vacantes');
        $datos['imagen'] = str_replace('public/vacantes', '',$imagen);
    }

    $vacante = Vacante::find($this->vacante_id);
    $vacante->titulo = $datos ['titulo'];
    $vacante->salario = $datos ['Salario'];
    $vacante->carrera_id = $datos ['carrera'];
    $vacante->empresa = $datos ['empresa'];
    $vacante->descripcion = $datos ['descripcion'];
    $vacante->imagen = $datos['imagen'] ?? $vacante->imagen;


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
