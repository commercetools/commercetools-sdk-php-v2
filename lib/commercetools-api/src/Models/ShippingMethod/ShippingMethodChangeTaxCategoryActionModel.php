<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;

final class ShippingMethodChangeTaxCategoryActionModel extends JsonObjectModel implements ShippingMethodChangeTaxCategoryAction
{
    const DISCRIMINATOR_VALUE = 'changeTaxCategory';
    public function __construct(
        string $action = null,
        TaxCategoryResourceIdentifier $taxCategory = null
    ) {
        $this->action = $action;
        $this->taxCategory = $taxCategory;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
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
           $data = $this->raw(ShippingMethodUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingMethodChangeTaxCategoryAction::FIELD_TAX_CATEGORY);
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
    
    final public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    
}