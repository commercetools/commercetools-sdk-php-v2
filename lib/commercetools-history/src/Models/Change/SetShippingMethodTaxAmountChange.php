<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetShippingMethodTaxAmountChange extends Change
{

    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setShippingMethodTaxAmount</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getTaxMode();

    /**
     * @return null|mixed
     */
    public function getNextValue();

    /**
     * @return null|mixed
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
     * @param ?JsonObject $nextValue
     */
    public function setNextValue(?JsonObject $nextValue): void;

    /**
     * @param ?JsonObject $previousValue
     */
    public function setPreviousValue(?JsonObject $previousValue): void;
}
