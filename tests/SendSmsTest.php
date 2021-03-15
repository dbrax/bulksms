<?php


namespace Epmnzava\Bulksms\Tests;


use Epmnzava\Bulksms\Bulksms;
use Epmnzava\Bulksms\BulksmsServiceProvider;
use Orchestra\Testbench\TestCase;

class SendSmsTest extends  TestCase
{

    protected function getPackageProviders($app)
    {
        return [BulksmsServiceProvider::class];
    }

    /** @test */
    public function sendSms()
    {

        $sms=new Bulksms;

        $response=json_encode($sms->sendMessage("255679079774","hellow man"));


    }

}
