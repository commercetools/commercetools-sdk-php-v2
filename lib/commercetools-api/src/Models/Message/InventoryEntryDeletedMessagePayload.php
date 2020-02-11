<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Channel\ChannelReference;

interface InventoryEntryDeletedMessagePayload extends MessagePayload
{

    public const FIELD_SKU = 'sku';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    public function setSku(?string $sku): void;

    public function setSupplyChannel(?ChannelReference $supplyChannel): void;
}
