<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ItemShippingDetails;

interface SetCustomLineItemShippingDetailsChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
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

     * @return null|ItemShippingDetails
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ItemShippingDetails
     */
    public function getNextValue();

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
     * @param ?ItemShippingDetails $previousValue
     */
    public function setPreviousValue(?ItemShippingDetails $previousValue): void;

    /**
     * @param ?ItemShippingDetails $nextValue
     */
    public function setNextValue(?ItemShippingDetails $nextValue): void;

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;
}
