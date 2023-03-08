<?php

namespace UrsacoreLab\StaticVars\Classes;

class Statuses
{
    const NEW = 0; // новый

    const APPROVED = 10; // подтвержден

    const COMPLETED = 20; //завершен

    const DISABLED = 100; // отключен

    const ACTIVE = 110; // активен

    const REMOVAL = 410; // на удалении

    static function list(): array
    {
        return [
            self::NEW       => 'ursacorelab.staticvars::lang.statuses.' . self::NEW,
            self::APPROVED  => 'ursacorelab.staticvars::lang.statuses.' . self::APPROVED,
            self::COMPLETED => 'ursacorelab.staticvars::lang.statuses.' . self::COMPLETED,
            self::DISABLED  => 'ursacorelab.staticvars::lang.statuses.' . self::DISABLED,
            self::ACTIVE    => 'ursacorelab.staticvars::lang.statuses.' . self::ACTIVE,
            self::REMOVAL   => 'ursacorelab.staticvars::lang.statuses.' . self::REMOVAL,
        ];
    }

    static function short_list(): array
    {
        return [
            self::DISABLED => 'ursacorelab.staticvars::lang.statuses.' . self::DISABLED,
            self::ACTIVE   => 'ursacorelab.staticvars::lang.statuses.' . self::ACTIVE,
        ];
    }
}
