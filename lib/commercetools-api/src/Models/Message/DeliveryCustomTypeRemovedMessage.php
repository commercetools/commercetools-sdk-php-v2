<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryCustomTypeRemovedMessage extends OrderMessage
{
    public const FIELD_PREVIOUS_TYPE_ID = 'previousTypeId';
    public const FIELD_DELIVERY_ID = 'deliveryId';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Type">Custom Type</a> that was removed. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @param ?string $previousTypeId
     */
    public function setPreviousTypeId(?string $previousTypeId): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;
}
