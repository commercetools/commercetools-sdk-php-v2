<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface DiscountedLineItemPrice extends JsonObject
{

    public const FIELD_VALUE = 'value';
    public const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';

    /**
     * @return null|Money
     */
    public function getValue();

    /**
     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

    /**
     * @param ?DiscountedLineItemPortionCollection $includedDiscounts
     */
    public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void;
}
