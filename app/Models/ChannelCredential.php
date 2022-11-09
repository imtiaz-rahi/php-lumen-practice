<?php

namespace App\Shurjopay\Controllers;

/**
 *  All the credentials need to initil
 *
 */
// TODO move to DbModel
class ChannelCredential
{

    /** Channel identifier code */
    private $channelId;
    /** Merchant identifier code, recognised by channel */
    private $merchantId;
    /** merchant store identifier, recognised by channel */
    private $storeId;

    /** Username, key or identifier for shurjoPay provided by channel or gateway */
    private $userKey;
    /** Password or secret hash for shurjoPay provided by channel or gateway */
    private $passSecret;

    private $publicKey;
    private $privateKey;

    private $submerchantName;
    private $terminald;
    private $clientId;

    private $characters; // TODO need to fixed by Fahim
    private $bankClientType;
    private $accountNo;
    private $methodCode;
    private $aliasName;
    private $clientIp;
}
