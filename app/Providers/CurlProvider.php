<?php

namespace App\Providers;

use App\Http\Controllers\Shurjopay\Curl;
use App\Shurjopay\Interfaces\HttpHandlerInterface;
use Exception;
use Illuminate\Support\Facades\Log;

// TODO Asif to Guzzle Provider
class CurlProvider implements HttpHandlerInterface {

    private ChannelHttpConfig $curl_config;
    private static HttpHandlerInterface $curlProvider;

    public function __construct(ChannelHttpConfig $config) {
        $this->curl_config = $config;
    }

    public function get(string $url, array $params) {
        return 0;
    }


    public function post(string $url, array $data): string {

        try {
            // TODO tap specific curl options need to be set / generated from this class
            // TODO tap specific config need to be pushed or injected to prepare the CurlProvider instance
            // TODO CurlProvider instance should be one for this channel handler

            $obj = new CurlProvider(new ChannelHttpConfig);
            $conf = $obj->curl_config;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => $conf->curloptReturntransfer,
                CURLOPT_ENCODING => $conf->curloptEncoding,
                CURLOPT_MAXREDIRS => $conf->maxRedirects,
                CURLOPT_TIMEOUT => $conf->connectionTimeout,
                CURLOPT_FOLLOWLOCATION => $conf->curloptFollowlocation,
                CURLOPT_HTTP_VERSION => $conf->httpVersion,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'application/x-www-form-urlencoded',
                    'Authorization:Basic c2h1cmpvcGF5LXNhbmRib3g6cmswcUF0d2VFaFBIdFQ='
                )
            ));

            $response = curl_exec($curl);
            return $response;

        } catch (Exception $ex) {
            return $ex->getMessage();
        } finally {
            curl_close($curl);
        }
    }


    /**
     * Get default configuration of a channel
     *
     * @return \App\Shurjopay\Controllers\ChannelHttpConfig
     */

    public function config() {
       $conf = new ChannelHttpConfig();
       return $conf;
    }


    public static function getInstance(): HttpHandlerInterface {

        if(is_null($curlProvider)){
            $curlProvider = new CurlProvider();
        }

        return $curlProvider;
    }

}
