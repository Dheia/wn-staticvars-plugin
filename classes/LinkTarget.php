<?php

namespace UrsacoreLab\StaticVars\Classes;

class LinkTarget
{
    static function list(): array
    {
        return [
            "_self"   => "ursacorelab.staticvars::lang.targets._self",
            "_blank"  => "ursacorelab.staticvars::lang.targets._blank",
            "_parent" => "ursacorelab.staticvars::lang.targets._parent",
            "_top"    => "ursacorelab.staticvars::lang.targets._top",
        ];
    }
}
