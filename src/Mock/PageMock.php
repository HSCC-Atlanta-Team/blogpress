<?php

namespace Blogpress\Mock;

use Blogpress\Model\Page;

class PageMock
{
    public static function getPage()
    {
        return new Page([
            'name' => "some-page",
            'createdAt' => 1579345900650,
            'totalViews' => 35,
            'contents' => '## Markdown1',
        ]);
    }

    public static function getPages()
    {
        return [
            new Page([
                'name' => "some-page2",
                'createdAt' => 1579545900650,
                'totalViews' => 36,
                'contents' => '## Markdown2',
            ]),

            new Page([
                'name' => "some-page3",
                'createdAt' => 1579259006350,
                'totalViews' => 37,
                'contents' => '## Markdown3',
            ]),

            new Page([
                'name' => "some-page4",
                'createdAt' => 1579345900650,
                'totalViews' => 38,
                'contents' => '## Markdown4',
            ])
            ];

    }

}