<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface RemoveParcelFromDeliveryChange extends Change
{

    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>removeParcelFromDelivery</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|Parcel
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
     * @param ?Parcel $previousValue
     */
    public function setPreviousValue(?Parcel $previousValue): void;
}
