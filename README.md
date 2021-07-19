# EncryptDecrypt Bundle
Encrypt and decrypt string.
Installation
---
### Step 1: Download the Bundle
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require hbnext/encrypt-decrypt-bundle
```
This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.


### Step 2: Enable the Bundle

With Symfony , the package will be activated automatically. But if something goes wrong, you can install it manually.

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
<?php
// config/bundles.php

return [
    //...
     hbNext\EncryptDecryptBundle\EncryptDecryptBundle::class => ['all' => true]
];
```
### Step 3: Enable the Bundle

Configure the key   in your config/packages/encrypt_decrypt.yaml :
```yaml
encrypt_decrypt:
  key: haikel
```
### Step 4: What It Does
This package allows you to encrypt and decrypt string .
Once installed you can do stuff like this:
##### PHP
```php
    
    use hbNext\EncryptDecryptBundle\services\EncryptionInterface;
    
    private EncryptionInterface $encryption;

    public function __construct(EncryptionInterface $encryption )
    {

        $this->encryption =$encryption;
    }
     $text="mytext";
     $this->encryption->encrypt($text);
     $this->encryption->decrypt(  $this->encryption->encrypt($text));

```
##### TWIG
```twig
   {{ encrypt('haikel') }}
   {{ decrypt('aGFpa2VsMzQ3YWFlOGMwODJjNzc3ZTg0MzE1MGY1ZTA5Mjc4MzE=') }}
```