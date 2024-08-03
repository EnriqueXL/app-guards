<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
// Componente de clase
class Alert2 extends Component
{
    public $class;
    
    public function __construct($type = 'info')

    {
        switch ($type) {
            case 'primary':
                $class = 'alert alert-primary';
                break;
    
            case 'secondary':
                $class = 'alert alert-secondary';
                break;
    
            case 'info':
                $class = 'alert alert-info';
                break;
    
            case 'danger':
                $class = 'alert alert-danger';
                break;
    
            case 'success':
                $class = 'alert alert-success';
                break;
    
            case 'warning':
                $class = 'alert alert-warning';
                break;
    
            case 'dark':
                $class = 'alert alert-dark';
                break;
    
            case 'light':
                $class = 'alert alert-light';
                break;
    
            default:
                $class = 'alert alert-info';
                break;
        }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
