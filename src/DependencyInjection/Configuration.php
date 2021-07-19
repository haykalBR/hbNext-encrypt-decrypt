<?php


namespace hbNext\EncryptDecryptBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder("encrypt_decrypt");
        $rootNode = $treeBuilder->getRootNode("encrypt_decrypt.yaml");
        $rootNode
            ->children()
            ->scalarNode('key')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->end();
        return $treeBuilder;
    }
}