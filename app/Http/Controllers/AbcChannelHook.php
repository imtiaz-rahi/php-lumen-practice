<?php

namespace App\Http\Controllers;

// TODO implement ChannelHandlerInterface
// TODO Asif
class AbcChannelHook extends Controller
{

    // TODO need verifyTransaction function in service or trait to use it in both Hook and Handler
    public function verify() {
        // TODO get list of dangled transaction from txlog or history
        // TODO loop in tx list and then call verifyTransaction from service
        // TODO receive and process response from verifyTransaction
        // TODO store verify status in DB
    }
}
