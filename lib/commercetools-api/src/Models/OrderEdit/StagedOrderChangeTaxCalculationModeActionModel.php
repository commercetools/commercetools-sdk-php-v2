<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderChangeTaxCalculationModeActionModel extends JsonObjectModel implements StagedOrderChangeTaxCalculationModeAction
{
    const DISCRIMINATOR_VALUE = 'changeTaxCalculationMode';
    public function __construct(
        string $action = null,
        string $taxCalculationMode = null
    ) {
        $this->action = $action;
        $this->taxCalculationMode = $taxCalculationMode;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $taxCalculationMode;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
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
    final public function getTaxCalculationMode()
    {
       if (is_null($this->taxCalculationMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderChangeTaxCalculationModeAction::FIELD_TAX_CALCULATION_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxCalculationMode = (string)$data;
       }
       return $this->taxCalculationMode;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTaxCalculationMode(?string $taxCalculationMode): void
    {
        $this->taxCalculationMode = $taxCalculationMode;
    }
    
}