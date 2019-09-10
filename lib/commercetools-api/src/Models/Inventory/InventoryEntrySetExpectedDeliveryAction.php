<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface InventoryEntrySetExpectedDeliveryAction extends InventoryEntryUpdateAction
{
    
    const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getExpectedDelivery();
    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;
}