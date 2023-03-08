<?php

namespace UrsacoreLab\StaticVars\Classes;

/*
 * Для справки: структура должна быть такой:
 [
    'type' => 'success',
    'show' => true,
    'translate_code' => 'statuses.loaded',
    'messages'  => [
        0 => [
            'type'  => 'warning',
            'translate_code' => 'Армия тьмы на подходе!'
        ]
    ]
 ]
 */

class Additional
{
    const LOADED = 'statuses.loaded';

    const DATA_NOT_FOUND = 'statuses.dataNotFound';

    /**
     * @param  bool  $show
     * @param  array|null  $messages
     * @param  string  $transcode
     *
     * @return array
     */
    static public function success(bool $show = false, array $messages = null, string $transcode = self::LOADED): array
    {
        return [
            'type'           => 'success',
            'show'           => $show,
            'translate_code' => $transcode,
            'messages'       => $messages,
        ];
    }

    /**
     * @param  bool  $show
     * @param  array|null  $messages
     * @param  string  $transcode
     *
     * @return array
     */
    static public function warning(bool $show = false, array $messages = null, string $transcode = self::DATA_NOT_FOUND): array
    {
        return [
            'type'           => 'warning',
            'show'           => $show,
            'translate_code' => $transcode,
            'messages'       => $messages,
        ];
    }

    /**
     * @param  bool  $show
     * @param  array|null  $messages
     * @param  string  $transcode
     *
     * @return array
     */
    static public function info(bool $show = false, array $messages = null, string $transcode = self::DATA_NOT_FOUND): array
    {
        return [
            'type'           => 'info',
            'show'           => $show,
            'translate_code' => $transcode,
            'messages'       => $messages,
        ];
    }

    /**
     * @param  bool  $show
     * @param  array|null  $messages
     * @param  string  $transcode
     *
     * @return array
     */
    static public function error(bool $show = false, array $messages = null, string $transcode = self::DATA_NOT_FOUND): array
    {
        return [
            'type'           => 'error',
            'show'           => $show,
            'translate_code' => $transcode,
            'messages'       => $messages,
        ];
    }
}
