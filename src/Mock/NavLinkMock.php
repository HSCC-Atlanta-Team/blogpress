<?php

namespace Blogpress\Mock;

use Blogpress\Model\NavLink;

class NavLinkMock
{
    public static function getNavLink()
    {
        return new NavLink([
            'href' => "//google.com",
            'text' => "Google Search",
        ]);
    }

    public static function getNavLinks()
    {
        return [
            new NavLink([
                'href' => "//yahoo.com",
                'text' => "Yahoo Search"
            ]),

            new NavLink([
                'href' => "//bing.com",
                'text' => "Bing Search"
            ]),

            new NavLink([
                'href' => "//DuckDuckGo.com",
                'text' => "DuckDuckGo Search"
            ]),


        ];
    }
}