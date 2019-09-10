<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftBuilder;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierBuilder;

/**
 * @implements Builder<StagedOrderSetShippingAddressAndShippingMethodAction>
 */
final class StagedOrderSetShippingAddressAndShippingMethodActionBuilder implements Builder
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
     * @var ?AddressBuilder|Address
     */
    protected $address;
    
    /**
     * @var ?ShippingMethodResourceIdentifierBuilder|ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;

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
     *
     * @return Address|null
     */
    final public function getAddress()
    {
       return ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address);
    }
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    final public function getShippingMethod()
    {
       return ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod);
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
    final public function withAddress(?Address $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        
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
    
    /**
     * @return $this
     */
    final public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethodBuilder(?ShippingMethodResourceIdentifierBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        
        return $this;
    }
    
    public function build(): StagedOrderSetShippingAddressAndShippingMethodAction {
        return new StagedOrderSetShippingAddressAndShippingMethodActionModel(
            $this->action,
            ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate),
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address),
            ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod)
        );
    }
    
    public static function of(): StagedOrderSetShippingAddressAndShippingMethodActionBuilder
    {
        return new self();
    }
}