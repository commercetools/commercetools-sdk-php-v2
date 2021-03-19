<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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
     * @return null|Reference
     */
    public function getProduct();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|Reference
     */
    public function getSupplyChannel();

    /**
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
