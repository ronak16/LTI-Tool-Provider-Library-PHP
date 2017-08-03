<?php

/**
 * Class to represent an %OAuth Data Store
 *
 */
class OAuthDataStore {

    private $consumer_key = NULL;
    private $consumer_secret = NULL;

    public function __construct($consumer_key, $consumer_secret) {
      $this->consumer_key = $consumer_key;
      $this->consumer_secret = $consumer_secret;

    }

    function lookup_consumer($consumer_key) {
         return new OAuthConsumer($this->consumer_key, $this->consumer_secret);
    }

    function lookup_token($consumer, $token_type, $token) {
        return new OAuthToken($consumer, '');
    }

    function lookup_nonce($consumer, $token, $nonce, $timestamp) {
       return FALSE;
    }

    function new_request_token($consumer, $callback = null) {
        return NULL;
    }

    function new_access_token($token, $consumer, $verifier = null) {
         return NULL;
        // return a new access token attached to this consumer
        // for the user associated with this token if the request token
        // is authorized
        // should also invalidate the request token
    }

}
