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


final class CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionModel extends JsonObjectModel implements CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction
{
    const DISCRIMINATOR_VALUE = 'applyDeltaToCustomLineItemShippingDetailsTargets';
    public function __construct(
        string $action = null,
        string $customLineItemId = null,
        ItemShippingTargetCollection $targetsDelta = null
    ) {
        $this->action = $action;
        $this->customLineItemId = $customLineItemId;
        $this->targetsDelta = $targetsDelta;
        
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
    final public function getCustomLineItemId()
    {
       if (is_null($this->customLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction::FIELD_CUSTOM_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItemId = (string)$data;
       }
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return ItemShippingTargetCollection|null
     */
    final public function getTargetsDelta()
    {
       if (is_null($this->targetsDelta)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction::FIELD_TARGETS_DELTA);
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
    
    final public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }
    
    final public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void
    {
        $this->targetsDelta = $targetsDelta;
    }
    
}