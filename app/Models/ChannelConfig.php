<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// TODO
// https://laravelcollective.com/docs/5.8/annotations
class ChannelConfig  extends Model
{

    /** Base URL or hostname of channel API endpoint.
     *  e.g. https://api.nagad.com.bd:8707, https://api.bkash.com
     * @Column("base_url")
     */
    public $baseUrl;
    /** API URL endpoint to initialize connection or payment transactions with channel */
    public $initUrl;
    /** API URL endpoint to get authorization tokens or validate it */
    public $authUrl;
    /** API URL endpoint to make payment, checkout order or create transaction
     * @Column("payment_url")
     */
    public $paymentUrl;
    /** API URL endpoint to verify payment, order or transaction */
    public $verifyUrl;
    /** Callback URL of shurjoPay to receive payment response from channel */
    public $paymentCallback;
    /** Callback URL of shurjoPay to receive cancellation response from channel */
    public $cancelCallback;

    /** shurjoPay merchant id assigned by channel or gateway */
    public $shurjoPayId;
    /** Username, key or identifier for shurjoPay provided by channel or gateway */
    public $userKey;
    /** Password or secret hash for shurjoPay provided by channel or gateway */
    public $passSecret;

    /** The attributes that are mass assignable. */
    protected $fillable = [

    ];

    /** The attributes excluded from the model's JSON form. */
    protected $hidden = [];

}
