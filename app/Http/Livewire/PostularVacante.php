<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Vacante;
use App\Notifications\NuevoCandidato;
use Illuminate\Validation\validator;


class PostularVacante extends Component
{

    use WithFileUploads;

    public $cv;
    public $vacante;
    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];
    public function mount(Vacante $vacante){
       $this->vacante = $vacante;
    }
    public function postularme(){
        $this->validate();

        //almacenar el cv
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/','',$cv);

        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $datos['cv']
        ]);

        $this->vacante->reclutador->notify(new NuevoCandidato($this->vacante->id, $this->vacante->titulo, auth()->user()->id));

        session()->flash('mensaje', 'Se envio correctamente tu informacion, ¡Exito!');
        return redirect()->back();

    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
