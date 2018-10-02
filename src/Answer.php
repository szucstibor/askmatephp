<?php
/**
 * Created by PhpStorm.
 * User: antalehrbar
 * Date: 02/10/18
 * Time: 13:47
 */

class Answer
{
    private $reply;
    private $datePosted;
    private $timePosted;
    private $dateEdited;
    private $timeEdited;
    private $user;

    /**
     * Answer constructor.
     * @param $reply
     * @param $datePosted
     * @param $timePosted
     * @param $user
     */
    public function __construct($reply, $datePosted, $timePosted, $user)
    {
        $this->reply = $reply;
        $this->datePosted = $datePosted;
        $this->timePosted = $timePosted;
        $this->user = $user;
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
     * @return mixed
     */
    public function getTimeEdited()
    {
        return $this->timeEdited;
    }

    /**
     * @return mixed
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * @param mixed $reply
     */
    public function setReply($reply)
    {
        $this->reply = $reply;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}