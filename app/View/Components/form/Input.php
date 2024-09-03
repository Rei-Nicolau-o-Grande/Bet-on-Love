<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $id;
    public string $name;
    public string $label;
    public string $type;
    public string $value;
    public string $classLabel;
    public string $classInput;

    /**
     * Cria uma nova instância do componente.
     *
     * @param string $id Id do input
     * @param string $name Nome do input
     * @param string $label Rótulo do input
     * @param string $type Tipo do input
     * @param string $value Value do input
     * @param string $classLabel Classe do Label
     * @param string $classInput Classe do input
     * @return void
     */
    public function __construct(string $id, string $name, string $label, string $type,
                                string $value, string $classLabel, string $classInput)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->value = $value;
        $this->classLabel = $classLabel;
        $this->classInput = $classInput;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
