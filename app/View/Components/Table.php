<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public string $title;
    public ?string $description;

    public function __construct(string $title, ?string $description = null )
    {
        $this->title = $title;
        $this->description = $description;
    }


    public function render()
    {
        return view('components.table');
    }
}
