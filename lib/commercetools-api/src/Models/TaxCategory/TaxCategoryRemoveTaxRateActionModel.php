<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class TaxCategoryRemoveTaxRateActionModel extends JsonObjectModel implements TaxCategoryRemoveTaxRateAction
{
    const DISCRIMINATOR_VALUE = 'removeTaxRate';
    public function __construct(
        string $action = null,
        string $taxRateId = null
    ) {
        $this->action = $action;
        $this->taxRateId = $taxRateId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $taxRateId;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TaxCategoryUpdateAction::FIELD_ACTION);
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
    final public function getTaxRateId()
    {
       if (is_null($this->taxRateId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TaxCategoryRemoveTaxRateAction::FIELD_TAX_RATE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->taxRateId = (string)$data;
       }
       return $this->taxRateId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTaxRateId(?string $taxRateId): void
    {
        $this->taxRateId = $taxRateId;
    }
    
}