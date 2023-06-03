<?php

namespace Blogpress\Model;

class Page {
    protected $name;
    protected $createdAt;
    protected $totalViews;
    protected $contents;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of totalViews
     */ 
    public function getTotalViews()
    {
        return $this->totalViews;
    }

    /**
     * Set the value of totalViews
     *
     * @return  self
     */ 
    public function setTotalViews($totalViews)
    {
        $this->totalViews = $totalViews;

        return $this;
    }

    /**
     * Get the value of contents
     */ 
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set the value of contents
     *
     * @return  self
     */ 
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }
}