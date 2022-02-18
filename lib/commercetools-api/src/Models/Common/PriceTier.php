<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PriceTier extends JsonObject
{
    public const FIELD_MINIMUM_QUANTITY = 'minimumQuantity';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|int
     */
    public function getMinimumQuantity();

    /**
     * <p>Base polymorphic read-only Money type which is stored in cent precision or high precision. The actual type is determined by the <code>type</code> field.</p>
     *
     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * @param ?int $minimumQuantity
     */
    public function setMinimumQuantity(?int $minimumQuantity): void;

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;
}
