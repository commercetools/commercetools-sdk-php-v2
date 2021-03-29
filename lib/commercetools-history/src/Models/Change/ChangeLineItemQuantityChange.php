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

interface ChangeLineItemQuantityChange extends Change
{

    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>changeLineItemQuantity</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|LocalizedString
     */
    public function getLineItem();

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>The amount of a LineItem in the cart. Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getNextValue();

    /**
     * <p>The amount of a LineItem in the cart. Must be a positive integer.</p>
     *
     * @return null|int
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
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?int $nextValue
     */
    public function setNextValue(?int $nextValue): void;

    /**
     * @param ?int $previousValue
     */
    public function setPreviousValue(?int $previousValue): void;
}
