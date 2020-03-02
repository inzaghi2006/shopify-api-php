<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service;

use Slince\Shopify\Model\DiscountCode;
use Slince\Shopify\Service\Contracts\DiscountCodeManagerInterface;

class DiscountCodeManager extends NestCrudable implements DiscountCodeManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'discount_codes';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'discount_code';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'price_rule';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return DiscountCode::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count($priceRuleId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}