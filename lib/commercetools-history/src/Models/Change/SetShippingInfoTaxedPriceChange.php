<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\TaxedPrice;

interface SetShippingInfoTaxedPriceChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setShippingInfoTaxedPrice</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|TaxedPrice
     */
    public function getNextValue();

    /**
     * @return null|TaxedPrice
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?TaxedPrice $nextValue
     */
    public function setNextValue(?TaxedPrice $nextValue): void;

    /**
     * @param ?TaxedPrice $previousValue
     */
    public function setPreviousValue(?TaxedPrice $previousValue): void;
}
