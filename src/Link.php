<?php
/**
 * Created by PhpStorm.
 * User: antalehrbar
 * Date: 03/10/18
 * Time: 10:11
 */

class Link
{
    private $link;

    /**
     * Link constructor.
     * @param $link
     */
    public function __construct()
    {
        $this->link = mysqli_connect("localhost", "tipi", "12345", "ask_mate");
    }

    /**
     * @return mysqli
     */
    public function getLink()
    {
        return $this->link;
    }
}