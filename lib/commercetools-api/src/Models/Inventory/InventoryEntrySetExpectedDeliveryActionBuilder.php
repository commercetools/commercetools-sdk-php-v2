<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;

/**
 * @implements Builder<InventoryEntrySetExpectedDeliveryAction>
 */
final class InventoryEntrySetExpectedDeliveryActionBuilder implements Builder
{
    public function __construct() {
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
       return $this->action;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getExpectedDelivery()
    {
       return $this->expectedDelivery;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExpectedDelivery(?DateTimeImmutable $expectedDelivery)
    {
        $this->expectedDelivery = $expectedDelivery;
        
        return $this;
    }
    
    public function build(): InventoryEntrySetExpectedDeliveryAction {
        return new InventoryEntrySetExpectedDeliveryActionModel(
            $this->action,
            $this->expectedDelivery
        );
    }
    
    public static function of(): InventoryEntrySetExpectedDeliveryActionBuilder
    {
        return new self();
    }
}