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
 * @implements Builder<CartSetShippingMethodTaxRateAction>
 */
final class CartSetShippingMethodTaxRateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ExternalTaxRateDraftBuilder|ExternalTaxRateDraft
     */
    protected $externalTaxRate;

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
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRate()
    {
       return ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate);
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
    final public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;
        
        return $this;
    }
    
    public function build(): CartSetShippingMethodTaxRateAction {
        return new CartSetShippingMethodTaxRateActionModel(
            $this->action,
            ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate)
        );
    }
    
    public static function of(): CartSetShippingMethodTaxRateActionBuilder
    {
        return new self();
    }
}