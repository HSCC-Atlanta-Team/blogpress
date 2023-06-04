<?php

namespace Blogpress\Model;

class NavLink {
    protected $href;
    protected $text;

    /**
     * Get the value of href
     */ 
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set the value of href
     *
     * @return  self
     */ 
    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}