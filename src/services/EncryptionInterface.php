<?php
namespace hbNext\EncryptDecryptBundle\services;

interface EncryptionInterface
{
    public function encrypt(string $text):string;
    public function decrypt(string $text):string;
}