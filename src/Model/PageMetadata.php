<?php

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