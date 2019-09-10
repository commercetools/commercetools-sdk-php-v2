<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CartApplyDeltaToLineItemShippingDetailsTargetsActionModel extends JsonObjectModel implements CartApplyDeltaToLineItemShippingDetailsTargetsAction
{
    const DISCRIMINATOR_VALUE = 'applyDeltaToLineItemShippingDetailsTargets';
    public function __construct(
        string $action = null,
        string $lineItemId = null,
        ItemShippingTargetCollection $targetsDelta = null
    ) {
        $this->action = $action;
        $this->lineItemId = $lineItemId;
        $this->targetsDelta = $targetsDelta;
        
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
     * @var ?ItemShippingTargetCollection
     */
    protected $targetsDelta;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartUpdateAction::FIELD_ACTION);
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
           $data = $this->raw(CartApplyDeltaToLineItemShippingDetailsTargetsAction::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    
    /**
     *
     * @return ItemShippingTargetCollection|null
     */
    final public function getTargetsDelta()
    {
       if (is_null($this->targetsDelta)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CartApplyDeltaToLineItemShippingDetailsTargetsAction::FIELD_TARGETS_DELTA);
           if (is_null($data)) {
               return null;
           }
           $this->targetsDelta = ItemShippingTargetCollection::fromArray($data);
       }
       return $this->targetsDelta;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
    final public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void
    {
        $this->targetsDelta = $targetsDelta;
    }
    
}