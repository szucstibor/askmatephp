<?php
/**
 * Created by PhpStorm.
 * User: antalehrbar
 * Date: 03/10/18
 * Time: 10:11
 */

class link_sample
{
    private $link;

    /**
     * Link constructor.
     * @param $link
     */
    public function __construct()
    {
        $this->link = mysqli_connect("", "", "", "");
    }

    /**
     * @return mysqli
     */
    public function getLink()
    {
        return $this->link;
    }
}