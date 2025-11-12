<?php

namespace App\View\CompoPlugs;

use Illuminate\View\Component;
use Illuminate\View\View;

// class AppLayout extends Component
class SitePostedData extends Component
{
    /**
     * Get the view / contents that represents the component.
     */

    public $postedData;
    public function __construct($postedData = null)
    {
        $this->postedData = $postedData;
    }
    
    public function render(): View
    {
        // return view('layouts.app');
        return view('compo-plugs.site-posted-data');
    }
}
