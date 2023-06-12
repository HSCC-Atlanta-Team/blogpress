<?php

namespace Blogpress\Mock;

class AdministratorMock
{
    public static function getAdmin()
    {
        return new Administrator([
            'user_id' => "5ec8adf06e38137ff2e58770",
            'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
            'username' => "Oforce1",
            'email' => "o@barackobama.com",
            'type' => "administrator",
        ]);
    }

    public static function getAdmins()
    {
        return [
            new Administrator([
                'user_id' => "5ec8adf06e38137ff2e58771",
                'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
                'username' => "Oforce2",
                'email' => "o1@barackobama.com",
                'type' => "administrator",
            ]),

            new Administrator([
                'user_id' => "5ec8adf06e38137ff2e58772",
                'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
                'username' => "Oforce3",
                'email' => "o2@barackobama.com",
                'type' => "administrator",
            ]),

            new Administrator([
                'user_id' => "5ec8adf06e38137ff2e58773",
                'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
                'username' => "Oforce4",
                'email' => "o4@barackobama.com",
                'type' => "administrator",
            ]),
        ];
    }
}