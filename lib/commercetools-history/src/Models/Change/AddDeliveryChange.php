<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\DeliveryChangeValue;

interface AddDeliveryChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addDelivery</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|DeliveryChangeValue
     */
    public function getNextValue();

    /**

     * @return null|DeliveryChangeValue
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?DeliveryChangeValue $nextValue
     */
    public function setNextValue(?DeliveryChangeValue $nextValue): void;

    /**
     * @param ?DeliveryChangeValue $previousValue
     */
    public function setPreviousValue(?DeliveryChangeValue $previousValue): void;
}
