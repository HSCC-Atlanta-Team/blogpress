<?php

// PageMetadataobject
// name
// The alphanumeric (- and _ are allowed) name of this page.

// string
// "some-page"
// createdAt
// When this page was created in milliseconds since the unix epoch. Generated automatically by the server.

// number
// 1579345900650
// totalViews
// The current number of views this page has.
// number

namespace Blogpress\Model;

class PageMetadata 
{
    protected $name;
    protected $createdAt;
    protected $totalViews;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getTotalViews(): int
    {
        return $this->totalViews;
    }

    public function setTotalViews(int $totalViews): self
    {
        $this->totalViews = $totalViews;

        return $this;
    }
}