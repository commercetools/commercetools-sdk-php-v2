<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\DeliveryItemCollection;

interface SetDeliveryItemsChange extends Change
{

    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setDeliveryItems</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getNextValue();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?DeliveryItemCollection $nextValue
     */
    public function setNextValue(?DeliveryItemCollection $nextValue): void;

    /**
     * @param ?DeliveryItemCollection $previousValue
     */
    public function setPreviousValue(?DeliveryItemCollection $previousValue): void;
}
