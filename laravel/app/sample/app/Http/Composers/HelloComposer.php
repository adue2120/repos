<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{

     /**
      * Undocumented function
      *
      * @param string $modal
      * @param array $mode
      * @return void
      */
    public function compose(View $view): void
    {
        $view->with('view_message', 'this view is "' . $view->getName() . '" !!');
    }
}
