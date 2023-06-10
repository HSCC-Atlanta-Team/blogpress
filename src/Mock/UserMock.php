<?php

namespace Blogpress\Mock;

use Blogpress\Model\User;

class UserMock 
{
    public static function getUser()
    {   
        return new User([
            'user_id' => "5ec8adf06e38137ff2e58770",
            'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
            'username' => "Oforce1",
            'email' => "o@barackobama.com",
            'blogName' => "some-blog",
            'type' => "blogger",
            'banned' => false
        ]);
    }

    public static function getAdminUser()
    {   
        return new User([
            'user_id' => "5ec8adf06e38137ff2e58771",
            'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
            'username' => "Oforce2",
            'email' => "o2@barackobama.com",
            'blogName' => "some-blog1",
            'type' => "administrator",
            'banned' => false
        ]);
    }

    public static function getUsers()
    {
        return [
            new User([
                'user_id' => "5ec8adf06e38137ff2e58775",
                'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
                'username' => "Oforce5",
                'email' => "o5@barackobama.com",
                'blogName' => "some-blog5",
                'type' => "blogger",
                'banned' => false,
            ]),

            new User([
                'user_id' => "5ec8adf06e38137ff2e58773",
                'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
                'username' => "Oforce3",
                'email' => "o3@barackobama.com",
                'blogName' => "some-blog3",
                'type' => "blogger",
                'banned' => false,
            ]),

            new User([
                'user_id' => "5ec8adf06e38137ff2e58774",
                'salt' => "2d6843cfd2ad23906fe33a236ba842a5",
                'username' => "Oforce4",
                'email' => "o4@barackobama.com",
                'blogName' => "some-blog4",
                'type' => "blogger",
                'banned' => false,
            ]),
        ];
    }




}