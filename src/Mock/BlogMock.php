<?php

namespace Blogpress\Mock;

use Blogpress\Model\Blog;

class BlogMock
{
    public static function getBlog()
    {
        return new Blog([
            'name' => "some-blog",
            'rootPage' => "home",
            'navLinks' => [
                "href" => "//google.com",
                "text" => "Google Search",
            ],
            'createdAt' => 1579345900650,
        ]);
    }

    public static function getBlogs()
    {
        return [
            new Blog([
                'name' => "some-blog2",
                'rootPage' => "home2",
                'navLinks' => [
                    "href" => "//google2.com",
                    "text" => "Google2 Search",
                ],
                'createdAt' => 1579346900650,
            ]),

            new Blog([
                'name' => "some-blog3",
                'rootPage' => "home3",
                'navLinks' => [
                    "href" => "//google3.com",
                    "text" => "Google3 Search",
                ],
                'createdAt' => 1579347900650,
            ]),

            new Blog([
                'name' => "some-blog4",
                'rootPage' => "home4",
                'navLinks' => [
                    "href" => "//google4.com",
                    "text" => "Google4 Search",
                ],
                'createdAt' => 1579348900650,
            ]),

        ];

    }
}