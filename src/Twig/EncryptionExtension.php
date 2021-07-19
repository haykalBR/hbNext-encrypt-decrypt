<?php


namespace hbNext\EncryptDecryptBundle\Twig;


use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use hbNext\EncryptDecryptBundle\services\EncryptionInterface;

class EncryptionExtension extends AbstractExtension
{

    private EncryptionInterface $encryption;
    public function __construct(EncryptionInterface $encryption)
    {
        $this->encryption = $encryption;
    }
    public function getFunctions(): array
    {
        return [
            new TwigFunction('encrypt', [$this, 'encrypt']),
            new TwigFunction('decrypt', [$this, 'decrypt']),
        ];
    }
    /**
     * @param string $text
     * @return string
     */
    public function encrypt(string $text):string
    {
        return $this->encryption->encrypt($text);
    }
    /**
     * @param string $enc
     * @return string
     */
    public function decrypt(string $enc):string
    {
        return $this->encryption->decrypt($enc);
    }
}