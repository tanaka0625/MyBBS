<?php

namespace App\View\Components;

use Illuminate\View\Component;

class postMenu extends Component
{
    public $post;
    public $page;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $page)
    {
        $this->post = $post;
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-menu');
    }
}
