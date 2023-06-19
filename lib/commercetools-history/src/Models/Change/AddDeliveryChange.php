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

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

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

     * @return null|DeliveryChangeValue
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DeliveryChangeValue
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?DeliveryChangeValue $previousValue
     */
    public function setPreviousValue(?DeliveryChangeValue $previousValue): void;

    /**
     * @param ?DeliveryChangeValue $nextValue
     */
    public function setNextValue(?DeliveryChangeValue $nextValue): void;
}
