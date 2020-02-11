<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use DateTimeImmutable;

interface InventoryEntryDraft extends JsonObject
{

    public const FIELD_SKU = 'sku';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';
    public const FIELD_CUSTOM = 'custom';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * @return null|int
     */
    public function getQuantityOnStock();

    /**
     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    public function setSku(?string $sku): void;

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    public function setQuantityOnStock(?int $quantityOnStock): void;

    public function setRestockableInDays(?int $restockableInDays): void;

    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;

    public function setCustom(?CustomFieldsDraft $custom): void;
}
