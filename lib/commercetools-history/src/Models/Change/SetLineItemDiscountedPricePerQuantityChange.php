<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\DiscountedLineItemPriceForQuantity;
use Commercetools\History\Models\Common\LocalizedString;

interface SetLineItemDiscountedPricePerQuantityChange extends Change
{

    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setLineItemDiscountedPricePerQuantity</code></p>
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
    public function getVariant();

    /**
     * @return null|DiscountedLineItemPriceForQuantity
     */
    public function getNextValue();

    /**
     * @return null|DiscountedLineItemPriceForQuantity
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
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void;

    /**
     * @param ?DiscountedLineItemPriceForQuantity $nextValue
     */
    public function setNextValue(?DiscountedLineItemPriceForQuantity $nextValue): void;

    /**
     * @param ?DiscountedLineItemPriceForQuantity $previousValue
     */
    public function setPreviousValue(?DiscountedLineItemPriceForQuantity $previousValue): void;
}
