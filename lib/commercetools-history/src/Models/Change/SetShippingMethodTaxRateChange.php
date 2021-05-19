<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\TaxRate;

interface SetShippingMethodTaxRateChange extends Change
{

    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setShippingMethodTaxRate</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *
     * @return null|TaxRate
     */
    public function getNextValue();

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *
     * @return null|TaxRate
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
     * @param ?TaxRate $nextValue
     */
    public function setNextValue(?TaxRate $nextValue): void;

    /**
     * @param ?TaxRate $previousValue
     */
    public function setPreviousValue(?TaxRate $previousValue): void;
}
