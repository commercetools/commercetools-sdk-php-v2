<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;

interface PriceTier extends JsonObject
{
    const FIELD_MINIMUM_QUANTITY = 'minimumQuantity';
    const FIELD_VALUE = 'value';

    /**
     * @return null|int
     */
    public function getMinimumQuantity();

    /**
     * @return null|Money
     */
    public function getValue();

    public function setMinimumQuantity(?int $minimumQuantity): void;

    public function setValue(?Money $value): void;
}
