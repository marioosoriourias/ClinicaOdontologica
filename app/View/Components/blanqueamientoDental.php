<?php

namespace App\View\Components;

use Illuminate\View\Component;

class blanqueamientoDental extends Component
{public $imagen;
    public $nombre;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nombre, $imagen)
    {
        $this->imagen = $imagen;
        $this->nombre = $nombre;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blanqueamiento-dental');
    }
}
