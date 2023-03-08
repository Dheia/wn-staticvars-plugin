<?php

namespace UrsacoreLab\StaticVars;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'ursacorelab.staticvars::lang.plugin.name',
            'description' => 'ursacorelab.staticvars::lang.plugin.description',
            'author'      => 'UrsacoreLab',
            'icon'        => 'icon-leaf',
        ];
    }
}
