<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github: https://github.com/dbrax/bulksms
 * Email: epmnzava@gmail.com
 *
 */

namespace Epmnzava\Bulksms;


class Bulksms
{


    protected static $statusMessages = array(
        0   => 'In progress',
        10 => 'Delivered upstream',
        11 => 'Delivered mobile',
        12 => 'Delivered upstream unacknowledged (presume in progress)',
        1   => 'Scheduled',
        22  => 'Internal fatal error',
        23  => 'Authentication error',
        24  => 'Data validation failed',
        25  => 'Insufficient credits',
        26  => 'Upstream credits not available',
        27  => 'Daily quota exceeded',
        28  => 'Upstream quota exceeded',
        40  => 'Temporarily unavailable',
        201 => 'Maximum batch size exceeded',
    );
    /**
     * @param $recepient
     * @param String $message
     *
     *
     * /messages?auto-unicode=true&longMessageMaxParts=30
     * Functiont to send sms
     */
    public function sendMessage($recepient,String $message) : Array
    {

        $username = config('bulksms.token_id');
        $password = config('bulksms.token_secret');

        $messages = array(
            array('to'=>$recepient, 'body'=>$message,'from'=>config('bulksms.sender_id'))
        );

        $api=new ApiUtil;

        $result=$api->send_message(json_encode($messages),config('bulksms.base_endpoint').'/messages?auto-unicode=true&longMessageMaxParts=30',$username,$password);

     return $result;



    }




}
