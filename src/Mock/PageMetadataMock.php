<?php

namespace Blogpress\Mock;

use Blogpress\Model\PageMetadata;

class PageMetadataMock 
{
    public static function getPageMetadata()
    {
        return new PageMetadata([
            'name' => "some-page",
            'createdAt' => 1579345900650,
            'totalViews' => 25,
        ]);
    }

    public static function getMultiPageMetadata()
    {
        return [ 
            new PageMetadata([
                'name' => "some-page2",
                'createdAt' => 1579335900650,
                'totalViews' => 37,
                ]),

            new PageMetadata([
                'name' => "some-page3",
                'createdAt' => 1506345900650,
                'totalViews' => 26,
                ]),

            new PageMetadata([
                'name' => "some-page4",
                'createdAt' => 1579245900650,
                'totalViews' => 27,
                ]),

            
            ];
    }
}