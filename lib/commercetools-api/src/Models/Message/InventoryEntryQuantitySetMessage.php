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

interface InventoryEntryQuantitySetMessage extends Message
{
    public const FIELD_OLD_QUANTITY_ON_STOCK = 'oldQuantityOnStock';
    public const FIELD_NEW_QUANTITY_ON_STOCK = 'newQuantityOnStock';
    public const FIELD_OLD_AVAILABLE_QUANTITY = 'oldAvailableQuantity';
    public const FIELD_NEW_AVAILABLE_QUANTITY = 'newAvailableQuantity';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * @return null|int
     */
    public function getOldQuantityOnStock();

    /**
     * @return null|int
     */
    public function getNewQuantityOnStock();

    /**
     * @return null|int
     */
    public function getOldAvailableQuantity();

    /**
     * @return null|int
     */
    public function getNewAvailableQuantity();

    /**
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
