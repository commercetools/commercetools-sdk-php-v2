<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\TaxedItemPrice;

interface SetOrderTaxedPriceChange extends Change
{

    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setOrderTaxedPrice</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getTaxMode();

    /**

     * @return null|TaxedItemPrice
     */
    public function getNextValue();

    /**

     * @return null|TaxedItemPrice
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;

    /**
     * @param ?TaxedItemPrice $nextValue
     */
    public function setNextValue(?TaxedItemPrice $nextValue): void;

    /**
     * @param ?TaxedItemPrice $previousValue
     */
    public function setPreviousValue(?TaxedItemPrice $previousValue): void;
}
