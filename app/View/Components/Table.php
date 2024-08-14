<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{

    public $headers;
    public $employesInfo;
    public $actions;

    /**
     * Create a new component instance.
     */
    public function __construct($headers, $employesInfo)
    {
        $this->headers = $headers;
        $this->employesInfo = $employesInfo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        if (empty($this->headers)) {
            return 'Envie las cabeceras necesarios para la tabla';
        }

        if (empty($this->employesInfo)) {
            return 'Envie la informacion necesaria para la tabla';
        }

        return view('components.table');
    }
}
