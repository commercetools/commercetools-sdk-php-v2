<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Address;

interface DeliveryAddressSetMessagePayload extends MessagePayload
{

    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_OLD_ADDRESS = 'oldAddress';

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|Address
     */
    public function getAddress();

    /**
     * @return null|Address
     */
    public function getOldAddress();

    public function setDeliveryId(?string $deliveryId): void;

    public function setAddress(?Address $address): void;

    public function setOldAddress(?Address $oldAddress): void;
}
