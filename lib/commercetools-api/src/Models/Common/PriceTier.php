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
     * <p>Minimum quantity this Price tier is valid for.</p>
     * <p>The minimum quantity is always greater than or equal to 2. The base Price is interpreted as valid for a minimum quantity equal to 1.</p>
     *
     * @return null|int
     */
    public function getMinimumQuantity();

    /**
     * <p>Money value that applies when the <code>minimumQuantity</code> is greater than or equal to the <a href="ctp:api:type:LineItem">LineItem</a> <code>quantity</code>.</p>
     * <p>The <code>currencyCode</code> of a Price tier is always the same as the <code>currencyCode</code> in the <code>value</code> of the related Price.</p>
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
