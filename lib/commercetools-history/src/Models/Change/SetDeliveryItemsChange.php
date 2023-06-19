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

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
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
     * <p>Value before the change.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getNextValue();

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?DeliveryItemCollection $previousValue
     */
    public function setPreviousValue(?DeliveryItemCollection $previousValue): void;

    /**
     * @param ?DeliveryItemCollection $nextValue
     */
    public function setNextValue(?DeliveryItemCollection $nextValue): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;
}
