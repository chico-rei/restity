<?php namespace ChicoRei\Packages\Restify\Contracts\Commands;

/**
 * Created by PhpStorm.
 * User: bendia
 * Date: 5/9/15
 * Time: 8:40 PM
 */
interface ListCommand
{
    /**
     * @return mixed
     */
    public function getPerPage();

    /**
     * @return mixed
     */
    public function getPage();
}