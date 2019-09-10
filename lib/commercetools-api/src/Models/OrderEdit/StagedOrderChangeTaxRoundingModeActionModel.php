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

final class StagedOrderChangeTaxRoundingModeActionModel extends JsonObjectModel implements StagedOrderChangeTaxRoundingModeAction
{
    const DISCRIMINATOR_VALUE = 'changeTaxRoundingMode';
    public function __construct(
        string $action = null,
        string $taxRoundingMode = null
    ) {
        $this->action = $action;
        $this->taxRoundingMode = $taxRoundingMode;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $taxRoundingMode;

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
    final public function getTaxRoundingMode()
    {
       if (is_null($this->taxRoundingMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderChangeTaxRoundingModeAction::FIELD_TAX_ROUNDING_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxRoundingMode = (string)$data;
       }
       return $this->taxRoundingMode;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }
    
}