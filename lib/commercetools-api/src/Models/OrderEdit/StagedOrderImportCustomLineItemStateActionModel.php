<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderImportCustomLineItemStateActionModel extends JsonObjectModel implements StagedOrderImportCustomLineItemStateAction
{
    const DISCRIMINATOR_VALUE = 'importCustomLineItemState';
    public function __construct(
        string $action = null,
        string $customLineItemId = null,
        ItemStateCollection $state = null
    ) {
        $this->action = $action;
        $this->customLineItemId = $customLineItemId;
        $this->state = $state;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $customLineItemId;
    
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
           $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
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
    final public function getCustomLineItemId()
    {
       if (is_null($this->customLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderImportCustomLineItemStateAction::FIELD_CUSTOM_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItemId = (string)$data;
       }
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return ItemStateCollection|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(StagedOrderImportCustomLineItemStateAction::FIELD_STATE);
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
    
    final public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }
    
    final public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }
    
}