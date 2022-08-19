<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryQuantitySetMessagePayload extends MessagePayload
{
    public const FIELD_OLD_QUANTITY_ON_STOCK = 'oldQuantityOnStock';
    public const FIELD_NEW_QUANTITY_ON_STOCK = 'newQuantityOnStock';
    public const FIELD_OLD_AVAILABLE_QUANTITY = 'oldAvailableQuantity';
    public const FIELD_NEW_AVAILABLE_QUANTITY = 'newAvailableQuantity';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * <p>Quantity on stock for the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> before the quantity was updated.</p>
     *

     * @return null|int
     */
    public function getOldQuantityOnStock();

    /**
     * <p>Quantity on stock for the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> after the quantity was updated.</p>
     *

     * @return null|int
     */
    public function getNewQuantityOnStock();

    /**
     * <p>Available quantity for the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> before the quantity was updated.</p>
     *

     * @return null|int
     */
    public function getOldAvailableQuantity();

    /**
     * <p>Available quantity for the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> after the quantity was updated.</p>
     *

     * @return null|int
     */
    public function getNewAvailableQuantity();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Channel">Channel</a> where the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> quantity was set.</p>
     *

     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @param ?int $oldQuantityOnStock
     */
    public function setOldQuantityOnStock(?int $oldQuantityOnStock): void;

    /**
     * @param ?int $newQuantityOnStock
     */
    public function setNewQuantityOnStock(?int $newQuantityOnStock): void;

    /**
     * @param ?int $oldAvailableQuantity
     */
    public function setOldAvailableQuantity(?int $oldAvailableQuantity): void;

    /**
     * @param ?int $newAvailableQuantity
     */
    public function setNewAvailableQuantity(?int $newAvailableQuantity): void;

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void;
}
