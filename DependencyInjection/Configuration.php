<?php
/**
 * Copyright © 2017 Divante, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Divante\Bundle\GABundle\DependencyInjection;

use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 */
class Configuration implements ConfigurationInterface
{
    const GA_NAME = 'divante_ga';

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNodeGA = $treeBuilder->root(self::GA_NAME);

        SettingsBuilder::append(
            $rootNodeGA,
            [
                'ga_enabled' => ['value' => true],
                'ga_user_id' => ['value' => 'MY_USERID'],
                'gtm_enabled' => ['value' => true],
                'gtm_user_id' => ['value' => 'MY_USERID'],
            ]
        );

        return $treeBuilder;
    }
}
