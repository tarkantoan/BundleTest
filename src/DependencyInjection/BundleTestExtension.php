<?php

namespace Knp\Bundle\MenuBundle\DependencyInjection;

use Knp\Menu\ItemInterface;
use Knp\Menu\Matcher\Voter\VoterInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class KnpMenuExtension extends Extension
{
    /**
     * Handles the knp_menu configuration.
     *
     * @param array $configs The configurations being loaded
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
    }
}