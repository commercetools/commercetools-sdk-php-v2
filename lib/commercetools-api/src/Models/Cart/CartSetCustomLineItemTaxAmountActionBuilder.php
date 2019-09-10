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
 * @implements Builder<CartSetCustomLineItemTaxAmountAction>
 */
final class CartSetCustomLineItemTaxAmountActionBuilder implements Builder
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
    protected $customLineItemId;
    
    /**
     * @var ?ExternalTaxAmountDraftBuilder|ExternalTaxAmountDraft
     */
    protected $externalTaxAmount;

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
    final public function getCustomLineItemId()
    {
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return ExternalTaxAmountDraft|null
     */
    final public function getExternalTaxAmount()
    {
       return ($this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount);
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
    final public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExternalTaxAmountBuilder(?ExternalTaxAmountDraftBuilder $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;
        
        return $this;
    }
    
    public function build(): CartSetCustomLineItemTaxAmountAction {
        return new CartSetCustomLineItemTaxAmountActionModel(
            $this->action,
            $this->customLineItemId,
            ($this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount)
        );
    }
    
    public static function of(): CartSetCustomLineItemTaxAmountActionBuilder
    {
        return new self();
    }
}