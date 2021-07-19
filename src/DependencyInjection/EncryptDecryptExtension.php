<?php
namespace hbNext\EncryptDecryptBundle\DependencyInjection;
use hbNext\EncryptDecryptBundle\services\Encryption;
use hbNext\EncryptDecryptBundle\Twig\EncryptionExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use hbNext\EncryptDecryptBundle\DependencyInjection\Configuration;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class EncryptDecryptExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $definition = $container->getDefinition(Encryption::class);
        $definition->setArgument('$key', $config['key']);
        $definition = $container->getDefinition(EncryptionExtension::class);
    }
}