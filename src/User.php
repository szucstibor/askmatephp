<?php
/**
 * Created by PhpStorm.
 * User: antalehrbar
 * Date: 02/10/18
 * Time: 13:40
 */

class User
{



    private $email;
    private $password;
    private $username;
    private $questions;
    private $answers;

    /**
     * User constructor.
     * @param $email
     * @param $password
     * @param $username
     */
    public function __construct($email, $password, $username)
    {
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @return mixed
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
}