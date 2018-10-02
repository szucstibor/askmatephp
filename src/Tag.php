<?php
/**
 * Created by PhpStorm.
 * User: antalehrbar
 * Date: 02/10/18
 * Time: 13:51
 */

class Tag
{
    private $name;

    /**
     * Tag constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}