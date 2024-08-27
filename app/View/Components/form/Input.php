<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * O id do input.
     *
     * @var string
     */
    public $id;

    /**
     * O nome do input.
     *
     * @var string
     */
    public $name;

    /**
     * O rótulo do input.
     *
     * @var string
     */
    public $label;

    /**
     * O tipo do input.
     *
     * @var string
     */
    public $type;

    /**
     * Mensagem de erro do input.
     *
     * @var string|null
     */
    public $error;

    /**
     * Cria uma nova instância do componente.
     *
     * @param string $id
     * @param string $name
     * @param string $label
     * @param string $type
     * @param string|null $error
     * @return void
     */
    public function __construct(string $id, string $name, string $label, string $type, ?string $error)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
