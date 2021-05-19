<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\CustomShippingMethodChangeValue;

interface SetCustomShippingMethodChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setCustomShippingMethod</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|CustomShippingMethodChangeValue
     */
    public function getNextValue();

    /**
     * @return null|CustomShippingMethodChangeValue
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?CustomShippingMethodChangeValue $nextValue
     */
    public function setNextValue(?CustomShippingMethodChangeValue $nextValue): void;

    /**
     * @param ?CustomShippingMethodChangeValue $previousValue
     */
    public function setPreviousValue(?CustomShippingMethodChangeValue $previousValue): void;
}
