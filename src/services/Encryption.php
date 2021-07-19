<?php

namespace hbNext\EncryptDecryptBundle\services;

class Encryption implements EncryptionInterface
{
     private string $key;
     public function  __construct(string  $key)
     {
         $this->key=$key;
     }

    public function encrypt( string $text):string{
        $key = md5($this->key);
        return base64_encode($text.$key);
     }
    public function decrypt(string $enc):string
    {
        $key = md5($this->key);
        return str_replace($key,'',base64_decode($enc));
    }
}