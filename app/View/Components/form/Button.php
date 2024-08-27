<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * O tipo do botão.
     *
     * @var string
     */
    public $type;

    /**
     * A classe do botão.
     *
     * @var string
     */
    public $class;

    /**
     * @param string $type
     * @param string $class
     */
    public function __construct(string $type, string $class)
    {
        $this->type = $type;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.button');
    }
}
