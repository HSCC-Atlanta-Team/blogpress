<?php

namespace Blogpress\Mock;

use Blogpress\Model\Info;

class InfoMock
{
    public static function getInfo()
    {
        return new Info([
            'blogs' => 10,
            'pages' => 5,
            'users' => 3,
        ]);
    }

    public static function getMultiInfo()
    {
        return [
            new Info([
                'blogs' => 11,
                'pages' => 6,
                'users' => 4,
            ]),

            new Info([
                'blogs' => 12,
                'pages' => 7,
                'users' => 5,
            ]),

            new Info([
                'blogs' => 13,
                'pages' => 8,
                'users' => 6,
            ])

            ];


    }
}