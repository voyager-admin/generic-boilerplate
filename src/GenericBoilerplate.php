<?php

namespace Voyager\GenericBoilerplate;

use Voyager\Admin\Contracts\Plugins\GenericPlugin;

class ThemeBoilerplate implements GenericPlugin
{
    public $name = 'Generic boilerplate';
    public $description = 'A boilerplate for a generic Voyager II plugin';
    public $repository = 'voyager-admin/generic-boilerplate';
    public $website = 'https://github.com/voyager-admin/generic-boilerplate';
    public $version = '1.0.0';

    public function __construct()
    {
        $this->readme = realpath(dirname(__DIR__, 1).'/README.md');
    }
}
