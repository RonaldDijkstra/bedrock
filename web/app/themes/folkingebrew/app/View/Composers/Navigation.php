<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Facades\Navi;

class Navigation extends Composer
{
     /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.navigation',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'primary_navigation' => $this->primary_navigation(),
        ];
    }

    /**
     * Return primary navigation as array.
     *
     * @return array
     */
    public function primary_navigation()
    {
        if (Navi::build('primary_navigation')->isEmpty()) {
            return;
        }

        return Navi::build('primary_navigation')->toArray();
    }
}
