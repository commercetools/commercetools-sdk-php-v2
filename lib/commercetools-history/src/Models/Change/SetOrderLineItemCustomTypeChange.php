<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\CustomFields;
use Commercetools\History\Models\Common\LocalizedString;

interface SetOrderLineItemCustomTypeChange extends Change
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
     * <p>Update action for <code>setLineItemCustomType</code></p>
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

     * @return null|CustomFields
     */
    public function getNextValue();

    /**

     * @return null|CustomFields
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
     * @param ?CustomFields $nextValue
     */
    public function setNextValue(?CustomFields $nextValue): void;

    /**
     * @param ?CustomFields $previousValue
     */
    public function setPreviousValue(?CustomFields $previousValue): void;
}
