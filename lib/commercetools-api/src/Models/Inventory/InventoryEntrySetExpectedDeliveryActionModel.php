<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

final class InventoryEntrySetExpectedDeliveryActionModel extends JsonObjectModel implements InventoryEntrySetExpectedDeliveryAction
{
    const DISCRIMINATOR_VALUE = 'setExpectedDelivery';
    public function __construct(
        string $action = null,
        DateTimeImmutable $expectedDelivery = null
    ) {
        $this->action = $action;
        $this->expectedDelivery = $expectedDelivery;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $expectedDelivery;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InventoryEntryUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getExpectedDelivery()
    {
       if (is_null($this->expectedDelivery)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->expectedDelivery = $data;
       }
       return $this->expectedDelivery;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void
    {
        $this->expectedDelivery = $expectedDelivery;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY]) && $data[InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY] instanceof \DateTimeImmutable) {
           $data[InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY] = $data[InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}