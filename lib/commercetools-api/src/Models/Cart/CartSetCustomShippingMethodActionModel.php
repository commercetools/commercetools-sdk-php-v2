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

use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;

final class CartSetCustomShippingMethodActionModel extends JsonObjectModel implements CartSetCustomShippingMethodAction
{
    const DISCRIMINATOR_VALUE = 'setCustomShippingMethod';
    public function __construct(
        string $action = null,
        ShippingRateDraft $shippingRate = null,
        ExternalTaxRateDraft $externalTaxRate = null,
        string $shippingMethodName = null,
        TaxCategoryResourceIdentifier $taxCategory = null
    ) {
        $this->action = $action;
        $this->shippingRate = $shippingRate;
        $this->externalTaxRate = $externalTaxRate;
        $this->shippingMethodName = $shippingMethodName;
        $this->taxCategory = $taxCategory;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;
    
    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    
    /**
     * @var ?string
     */
    protected $shippingMethodName;
    
    /**
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

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
     * @return ShippingRateDraft|null
     */
    final public function getShippingRate()
    {
       if (is_null($this->shippingRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetCustomShippingMethodAction::FIELD_SHIPPING_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingRate = ShippingRateDraftModel::of($data);
       }
       return $this->shippingRate;
    }
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRate()
    {
       if (is_null($this->externalTaxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetCustomShippingMethodAction::FIELD_EXTERNAL_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
       }
       return $this->externalTaxRate;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getShippingMethodName()
    {
       if (is_null($this->shippingMethodName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartSetCustomShippingMethodAction::FIELD_SHIPPING_METHOD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->shippingMethodName = (string)$data;
       }
       return $this->shippingMethodName;
    }
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetCustomShippingMethodAction::FIELD_TAX_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
       }
       return $this->taxCategory;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }
    
    final public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }
    
    final public function setShippingMethodName(?string $shippingMethodName): void
    {
        $this->shippingMethodName = $shippingMethodName;
    }
    
    final public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    
}