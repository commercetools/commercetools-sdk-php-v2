<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface PriceTier extends JsonObject
{

    public const FIELD_MINIMUM_QUANTITY = 'minimumQuantity';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|int
     */
    public function getMinimumQuantity();

    /**
     * @return null|TypedMoney
     */
    public function getValue();

    public function setMinimumQuantity(?int $minimumQuantity): void;

    public function setValue(?TypedMoney $value): void;
}
