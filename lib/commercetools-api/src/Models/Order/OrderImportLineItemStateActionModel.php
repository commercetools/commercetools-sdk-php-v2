<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderImportLineItemStateActionModel extends JsonObjectModel implements OrderImportLineItemStateAction
{
    const DISCRIMINATOR_VALUE = 'importLineItemState';
    public function __construct(
        string $action = null,
        string $lineItemId = null,
        ItemStateCollection $state = null
    ) {
        $this->action = $action;
        $this->lineItemId = $lineItemId;
        $this->state = $state;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $lineItemId;
    
    /**
     * @var ?ItemStateCollection
     */
    protected $state;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemId()
    {
       if (is_null($this->lineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportLineItemStateAction::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    
    /**
     *
     * @return ItemStateCollection|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderImportLineItemStateAction::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->state = ItemStateCollection::fromArray($data);
       }
       return $this->state;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
    final public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }
    
}