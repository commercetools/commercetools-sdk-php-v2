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

use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;

final class CartSetShippingMethodActionModel extends JsonObjectModel implements CartSetShippingMethodAction
{
    const DISCRIMINATOR_VALUE = 'setShippingMethod';
    public function __construct(
        string $action = null,
        ExternalTaxRateDraft $externalTaxRate = null,
        ShippingMethodResourceIdentifier $shippingMethod = null
    ) {
        $this->action = $action;
        $this->externalTaxRate = $externalTaxRate;
        $this->shippingMethod = $shippingMethod;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    
    /**
     * @var ?ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;

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
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRate()
    {
       if (is_null($this->externalTaxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetShippingMethodAction::FIELD_EXTERNAL_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
       }
       return $this->externalTaxRate;
    }
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    final public function getShippingMethod()
    {
       if (is_null($this->shippingMethod)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetShippingMethodAction::FIELD_SHIPPING_METHOD);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingMethod = ShippingMethodResourceIdentifierModel::of($data);
       }
       return $this->shippingMethod;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }
    
    final public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }
    
}