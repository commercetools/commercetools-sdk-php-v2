<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

interface InventorySetExpectedDeliveryAction extends InventoryEntryUpdateAction {
    const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';

    /**
     * @return \DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * @param \DateTimeImmutable $expectedDelivery
     * @return $this
     */
    public function setExpectedDelivery($expectedDelivery);

}
