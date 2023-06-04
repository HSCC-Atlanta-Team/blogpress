<?php

namespace Blogpress\Model;

class Info {
    protected $blogs;
    protected $pages;
    protected $users;

        /**
     * Get the value of blogs
     */ 
    public function getBlogs()
    {
        return $this->blogs;
    }

    /**
     * Set the value of blogs
     *
     * @return  self
     */ 
    public function setBlogs($blogs)
    {
        $this->blogs = $blogs;

        return $this;
    }

        /**
     * Get the value of pages
     */ 
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set the value of pages
     *
     * @return  self
     */ 
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

        /**
     * Get the value of users
     */ 
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set the value of users
     *
     * @return  self
     */ 
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }
}