<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\ShippingMethodChangeValue;

interface SetShippingMethodChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setShippingMethod</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|ShippingMethodChangeValue
     */
    public function getNextValue();

    /**

     * @return null|ShippingMethodChangeValue
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ShippingMethodChangeValue $nextValue
     */
    public function setNextValue(?ShippingMethodChangeValue $nextValue): void;

    /**
     * @param ?ShippingMethodChangeValue $previousValue
     */
    public function setPreviousValue(?ShippingMethodChangeValue $previousValue): void;
}
