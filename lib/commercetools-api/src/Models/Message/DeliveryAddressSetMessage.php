<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryAddressSetMessage extends OrderMessage
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

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?Address $oldAddress
     */
    public function setOldAddress(?Address $oldAddress): void;
}
