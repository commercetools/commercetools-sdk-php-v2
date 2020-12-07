<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueGiftLineItemDraft extends CartDiscountValueDraft
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     * @return null|ProductResourceIdentifier
     */
    public function getProduct();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The channel must have the role <code>InventorySupply</code></p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * <p>The channel must have the role <code>ProductDistribution</code></p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * @param ?ProductResourceIdentifier $product
     */
    public function setProduct(?ProductResourceIdentifier $product): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;
}
