<?php
/**
 * Created by PhpStorm.
 * User: antalehrbar
 * Date: 02/10/18
 * Time: 13:44
 */

class Question
{
    private $title;
    private $description;
    private $datePosted;
    private $timePosted;
    private $dateEdited;
    private $timeEdited;
    private $replyId;
    private $username;
    private $tagId;

    /**
     * Question constructor.
     * @param $title
     * @param $description
     * @param $datePosted
     * @param $timePosted
     * @param $username
     * @param $tagId
     */
    public function __construct($title, $description, $datePosted, $timePosted, $username, $tagId)
    {
        $this->title = $title;
        $this->description = $description;
        $this->datePosted = $datePosted;
        $this->timePosted = $timePosted;
        $this->username = $username;
        $this->tagId = $tagId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }



    /**
     * @return mixed
     */
    public function getTimePosted()
    {
        return $this->timePosted;
    }


    /**
     * @return mixed
     */
    public function getDateEdited()
    {
        return $this->dateEdited;
    }

    /**
     * @param mixed $dateEdited
     */
    public function setDateEdited($dateEdited)
    {
        $this->dateEdited = $dateEdited;
    }

    /**
     * @return mixed
     */
    public function getTimeEdited()
    {
        return $this->timeEdited;
    }

    /**
     * @param mixed $timeEdited
     */
    public function setTimeEdited($timeEdited)
    {
        $this->timeEdited = $timeEdited;
    }

    /**
     * @return mixed
     */
    public function getReplyId()
    {
        return $this->replyId;
    }

    /**
     * @param mixed $replyId
     */
    public function setReplyId($replyId)
    {
        $this->replyId = $replyId;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * @param mixed $tagId
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
    }
}