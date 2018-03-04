<?php
/*
 * (c) 2016: 975l <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('c975_l_xliff');

        $rootNode
            ->children()
                ->scalarNode('source')
                    ->defaultValue('en')
                ->end()
                ->scalarNode('rootTranslations')
                    ->defaultValue('app/Resources/translations')
                ->end()
                ->arrayNode('languages')
                    ->prototype('scalar')->end()
                    ->defaultValue(array(
                        'en',
                    ))
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
