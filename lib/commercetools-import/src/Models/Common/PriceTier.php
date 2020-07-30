<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PriceTier extends JsonObject
{
    public const FIELD_MINIMUM_QUANTITY = 'minimumQuantity';
    public const FIELD_VALUE = 'value';

    /**
     * <p>The minimum quantity this price tier is valid for.</p>
     *
     * @return null|int
     */
    public function getMinimumQuantity();

    /**
     * <p>The currency of a price tier is always the same as the currency of the base Price.</p>
     *
     * @return null|Money
     */
    public function getValue();

    /**
     * @param ?int $minimumQuantity
     */
    public function setMinimumQuantity(?int $minimumQuantity): void;

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;
}
