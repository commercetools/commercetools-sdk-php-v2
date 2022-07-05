<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Parcel;

interface AddParcelToDeliveryChange extends Change
{

    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addParcelToDelivery</code></p>
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
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?Parcel $nextValue
     */
    public function setNextValue(?Parcel $nextValue): void;
}
