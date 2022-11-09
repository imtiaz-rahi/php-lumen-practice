<?php

namespace App\Shurjopay\Controllers;

/**
 * Get channel HTTP configuration
 * 
 * @author Imtiaz Rahi
 * @author Mominur rahman
 * @since 2022-11-01
 * 
 */
class ChannelHttpConfig {

    /**
     * HTTP protocol version to use
     * Read more https://curl.se/libcurl/c/CURLOPT_HTTP_VERSION.html
    */
    public $httpVersion = 'CURL_HTTP_VERSION_1_1';
    /** 
     * Maximum amount of time in seconds to which the execution of individual 
     * cURL extension function calls will be limited
     * Default timeout is 0 (zero) which means it never times out during transfer
    */
    public $connectionTimeout = 0;

    /** 
     * The maximum amount of HTTP redirections to follow 
     * Default value of 20 is set to prevent infinite redirects.
     * Setting to -1 allows inifinite redirects, and 0 refuses all redirects. 
    */
    public $maxRedirects = 20;

    /**
     * true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly
     * Default value is true
     */
    public $curloptReturntransfer = true;

    /**
     * Tells the server what types of encoding it will accept
     * Default value is empty string
     */
    public $curloptEncoding = "";

    /**
     * Follow any "Location: " header that the server sends as part of the HTTP header
     * Default value is true
     */
    public $curloptFollowlocation = true;

    /**
     * Used to specify the request type e.g. POST, GET
     */
    public $curloptCustomrequest;

    /**
     * This is the URL that we want PHP to fetch
     */
    public $curloptUrl;

    /**
     * It returns a pointer to an encoded string that can be passed as postdata
     * Array();
     */
    public $curloptPostfields;

    /**
     * Pass a pointer to a linked list of HTTP headers to pass to the server and/or proxy in your HTTP request
     * Array()
     */
    public $curloptHttpheader;


}
