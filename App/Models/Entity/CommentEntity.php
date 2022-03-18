<?php
namespace App\Models;


/**
 * Example user model
 *
 * PHP version 7.0
 */
class CommentEntity
{ 
    private $id_com;
    private $content;
    private $time;
    


   

    

    



    

    /**
     * Get the value of id_com
     */ 
    public function getId_com()
    {
        return $this->id_com;
    }

    /**
     * Set the value of id_com
     *
     * @return  self
     */ 
    public function setId_com($id_com)
    {
        $this->id_com = $id_com;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of time
     */ 
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */ 
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }
}