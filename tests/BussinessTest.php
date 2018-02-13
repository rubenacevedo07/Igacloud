<?php

use App\Notice;
use App\Bussiness;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BussinessTest extends TestCase
{

    /** @test */
    function a_bussiness_has_notices()
    {
        $bussiness = new Bussiness();

        $notice = new Notice;
        $notice2 = new Notice;

        $bussiness->publish($notice);
        $bussiness->publish($notice2);

        $this->assertEquals(2, count($bussiness->notices()));

        $this->assertFalse(3 === count($bussiness->notices()));

        $this->assertCount(2, $bussiness->notices());

        $this->assertTrue(2 === count($bussiness->notices()));
    }

}