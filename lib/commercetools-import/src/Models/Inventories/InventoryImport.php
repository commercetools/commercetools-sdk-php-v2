<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Inventories;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Customfields\Custom;
use DateTimeImmutable;

interface InventoryImport extends ImportResource
{
    public const FIELD_SKU = 'sku';
    public const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>InventoryEntry.sku</code></p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Maps to <code>InventoryEntry.quantityOnStock</code></p>
     *

     * @return null|int
     */
    public function getQuantityOnStock();

    /**
     * <p>Maps to <code>InventoryEntry.restockableInDays</code></p>
     *

     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * <p>Maps to <code>InventoryEntry.expectedDelivery</code></p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * <p>Maps to <code>InventoryEntry.supplyChannel</code>. If the referenced <a href="ctp:api:type:Channel">Channel</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Channel is created.</p>
     *

     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel();

    /**
     * <p>Maps to <code>InventoryEntry.custom</code>.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?int $quantityOnStock
     */
    public function setQuantityOnStock(?int $quantityOnStock): void;

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void;

    /**
     * @param ?DateTimeImmutable $expectedDelivery
     */
    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;

    /**
     * @param ?ChannelKeyReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelKeyReference $supplyChannel): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
