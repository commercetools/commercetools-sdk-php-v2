<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\TaxRate;

interface SetCustomLineItemTaxAmountChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CUSTOM_LINE_ITEM = 'customLineItem';
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_TAX_MODE = 'taxMode';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|TaxRate
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|TaxRate
     */
    public function getNextValue();

    /**
     * <p>Name of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getCustomLineItem();

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p><code>&quot;ExternalAmount&quot;</code></p>
     *

     * @return null|string
     */
    public function getTaxMode();

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

    /**
     * @param ?LocalizedString $customLineItem
     */
    public function setCustomLineItem(?LocalizedString $customLineItem): void;

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;
}
