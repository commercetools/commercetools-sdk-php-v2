<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\TextLineItemValue;
use Commercetools\History\Models\Common\LocalizedString;

interface ChangeTextLineItemNameChange extends Change
{

    public const FIELD_TEXT_LINE_ITEM = 'textLineItem';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>changeTextLineItemName</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|TextLineItemValue
     */
    public function getTextLineItem();

    /**
     * @return null|LocalizedString
     */
    public function getNextValue();

    /**
     * @return null|LocalizedString
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?TextLineItemValue $textLineItem
     */
    public function setTextLineItem(?TextLineItemValue $textLineItem): void;

    /**
     * @param ?LocalizedString $nextValue
     */
    public function setNextValue(?LocalizedString $nextValue): void;

    /**
     * @param ?LocalizedString $previousValue
     */
    public function setPreviousValue(?LocalizedString $previousValue): void;
}
