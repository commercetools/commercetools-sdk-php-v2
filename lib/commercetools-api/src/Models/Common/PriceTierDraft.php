<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PriceTierDraft extends JsonObject
{
    public const FIELD_MINIMUM_QUANTITY = 'minimumQuantity';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|int
     */
    public function getMinimumQuantity();

    /**
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
