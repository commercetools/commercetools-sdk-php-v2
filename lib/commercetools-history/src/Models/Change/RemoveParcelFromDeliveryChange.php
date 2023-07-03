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

interface RemoveParcelFromDeliveryChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_DELIVERY_ID = 'deliveryId';

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

     * @return null|Parcel
     */
    public function getPreviousValue();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Delivery">Delivery</a> from which the Parcel was removed.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Parcel $previousValue
     */
    public function setPreviousValue(?Parcel $previousValue): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;
}
