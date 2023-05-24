<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;
use Illuminate\Validation\validator;


class PostularVacante extends Component
{

    use WithFileUploads;

    public $cv;
    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];
    public function postularme(){
        $this->validate();

        //almacenar el cv
        $imagen = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/','',$cv);

    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
