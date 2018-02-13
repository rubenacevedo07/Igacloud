<?php
/**
 * Created by PhpStorm.
 * User: Walter
 * Date: 11/03/2017
 * Time: 09:35 AM
 */

namespace App\Repository;
use App\Bussiness;
use App\Contracts\BussinessInterface;

class BussinessRepository implements BussinessInterface
{
    protected $bussiness;

    public function __construct(Bussiness $bussiness)
    {
        $this->bussiness = $bussiness;
    }

    public function publish(Array $notice)
    {
        $this->bussiness->id = $notice->id;

    }
}