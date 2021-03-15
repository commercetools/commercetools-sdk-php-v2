<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddDeliveryAction extends Action
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
     * @return null|DeliveryActionValue
     */
    public function getNextValue();

    /**
     * @return null|DeliveryActionValue
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?DeliveryActionValue $nextValue
     */
    public function setNextValue(?DeliveryActionValue $nextValue): void;

    /**
     * @param ?DeliveryActionValue $previousValue
     */
    public function setPreviousValue(?DeliveryActionValue $previousValue): void;
}
