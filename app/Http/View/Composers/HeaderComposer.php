<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class HeaderComposer
{

    public function compose(View $view)
    {
        $navitems = collect([
            ['name' => 'Cotiza tu mejor isapre', 'link' => route('quotation.create')]
        ]);

        $view->with('navitems', $navitems);
    }
}