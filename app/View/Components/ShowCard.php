<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowCard extends Component
{

    public $show;
    public $genres;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($show, $genres)
    {
        //
        $this->show = $show;
        $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-card');
    }
}
