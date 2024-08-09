<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryCustomFieldRemovedMessagePayload extends OrderMessagePayload
{
    public const FIELD_NAME = 'name';
    public const FIELD_DELIVERY_ID = 'deliveryId';

    /**
     * <p>Name of the Custom Field that was removed.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;
}
