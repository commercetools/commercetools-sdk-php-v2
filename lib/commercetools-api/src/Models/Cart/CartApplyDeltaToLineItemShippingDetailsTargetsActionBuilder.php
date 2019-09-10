<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartApplyDeltaToLineItemShippingDetailsTargetsAction>
 */
final class CartApplyDeltaToLineItemShippingDetailsTargetsActionBuilder implements Builder
{
    public function __construct() {
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
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemId()
    {
       return $this->lineItemId;
    }
    
    /**
     *
     * @return ItemShippingTargetCollection|null
     */
    final public function getTargetsDelta()
    {
       return $this->targetsDelta;
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
    final public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTargetsDelta(?ItemShippingTargetCollection $targetsDelta)
    {
        $this->targetsDelta = $targetsDelta;
        
        return $this;
    }
    
    public function build(): CartApplyDeltaToLineItemShippingDetailsTargetsAction {
        return new CartApplyDeltaToLineItemShippingDetailsTargetsActionModel(
            $this->action,
            $this->lineItemId,
            $this->targetsDelta
        );
    }
    
    public static function of(): CartApplyDeltaToLineItemShippingDetailsTargetsActionBuilder
    {
        return new self();
    }
}