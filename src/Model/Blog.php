<?php

namespace Blogpress\Model;

class Blog {
    protected $name;
    protected $rootPage;
    protected $navLinks;
    protected $createdAt;

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
     * Get the value of rootPage
     */ 
    public function getrootPage()
    {
        return $this->rootPage;
    }

    /**
     * Set the value of rootPage
     *
     * @return  self
     */ 
    public function setrootPage($rootPage)
    {
        $this->rootPage = $rootPage;

        return $this;
    }

        /**
     * Get the value of navLinks
     */ 
    public function getnavLinks()
    {
        return $this->navLinks;
    }

    /**
     * Set the value of navLinks
     *
     * @return  self
     */ 
    public function setnavLinks($navLinks)
    {
        $this->navLinks = $navLinks;

        return $this;
    }

        /**
     * Get the value of createdAt
     */ 
    public function getcreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */ 
    public function setcreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}