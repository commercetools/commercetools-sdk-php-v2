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

interface RemoveTaxRateChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>removeTaxRate</code> on tax categories</p>
     *

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *

     * @return null|TaxRate
     */
    public function getPreviousValue();

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *

     * @return null|TaxRate
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?TaxRate $previousValue
     */
    public function setPreviousValue(?TaxRate $previousValue): void;

    /**
     * @param ?TaxRate $nextValue
     */
    public function setNextValue(?TaxRate $nextValue): void;
}
