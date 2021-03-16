<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetLineItemPriceChange extends Change
{

    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setLineItemPrice</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|LocalizedString
     */
    public function getLineItem();

    /**
     * @return null|Price
     */
    public function getNextValue();

    /**
     * @return null|Price
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?LocalizedString $lineItem
     */
    public function setLineItem(?LocalizedString $lineItem): void;

    /**
     * @param ?Price $nextValue
     */
    public function setNextValue(?Price $nextValue): void;

    /**
     * @param ?Price $previousValue
     */
    public function setPreviousValue(?Price $previousValue): void;
}
