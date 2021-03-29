<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\CustomLineItem;

interface RemoveCustomLineItemChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for adding and removing custom line items</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|CustomLineItem
     */
    public function getNextValue();

    /**
     * @return null|CustomLineItem
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?CustomLineItem $nextValue
     */
    public function setNextValue(?CustomLineItem $nextValue): void;

    /**
     * @param ?CustomLineItem $previousValue
     */
    public function setPreviousValue(?CustomLineItem $previousValue): void;
}
