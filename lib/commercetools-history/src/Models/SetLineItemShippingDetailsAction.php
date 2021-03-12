<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetLineItemShippingDetailsAction extends Action
{

    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setLineItemShippingDetails</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|ItemShippingDetails
     */
    public function getNextValue();

    /**
     * @return null|ItemShippingDetails
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?ItemShippingDetails $nextValue
     */
    public function setNextValue(?ItemShippingDetails $nextValue): void;

    /**
     * @param ?ItemShippingDetails $previousValue
     */
    public function setPreviousValue(?ItemShippingDetails $previousValue): void;
}
