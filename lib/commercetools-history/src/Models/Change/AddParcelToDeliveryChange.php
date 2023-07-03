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

    public const FIELD_NEXT_VALUE = 'nextValue';
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
     * <p>Value after the change.</p>
     *

     * @return null|Parcel
     */
    public function getNextValue();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Delivery">Delivery</a> to which the Parcel was added.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Parcel $nextValue
     */
    public function setNextValue(?Parcel $nextValue): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;
}
