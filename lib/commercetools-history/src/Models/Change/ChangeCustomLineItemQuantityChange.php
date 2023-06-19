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

interface ChangeCustomLineItemQuantityChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CUSTOM_LINE_ITEM = 'customLineItem';
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';

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

     * @return null|int
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|int
     */
    public function getNextValue();

    /**
     * <p>Name of the CustomLineItem.</p>
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
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?int $previousValue
     */
    public function setPreviousValue(?int $previousValue): void;

    /**
     * @param ?int $nextValue
     */
    public function setNextValue(?int $nextValue): void;

    /**
     * @param ?LocalizedString $customLineItem
     */
    public function setCustomLineItem(?LocalizedString $customLineItem): void;

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;
}
