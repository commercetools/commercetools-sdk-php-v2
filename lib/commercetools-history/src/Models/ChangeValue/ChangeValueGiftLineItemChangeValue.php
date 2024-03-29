<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Reference;

interface ChangeValueGiftLineItemChangeValue extends ChangeValueChangeValue
{

    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Reference to a <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|Reference
     */
    public function getProduct();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Channel with <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a> <code>InventorySupply</code>.</p>
     *

     * @return null|Reference
     */
    public function getSupplyChannel();

    /**
     * <p>Channel with <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a> <code>ProductDistribution</code>.</p>
     *

     * @return null|Reference
     */
    public function getDistributionChannel();

    /**
     * @param ?Reference $product
     */
    public function setProduct(?Reference $product): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?Reference $supplyChannel
     */
    public function setSupplyChannel(?Reference $supplyChannel): void;

    /**
     * @param ?Reference $distributionChannel
     */
    public function setDistributionChannel(?Reference $distributionChannel): void;
}
