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

final class StagedOrderChangeTaxModeActionModel extends JsonObjectModel implements StagedOrderChangeTaxModeAction
{
    const DISCRIMINATOR_VALUE = 'changeTaxMode';
    public function __construct(
        string $action = null,
        string $taxMode = null
    ) {
        $this->action = $action;
        $this->taxMode = $taxMode;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $taxMode;

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
    final public function getTaxMode()
    {
       if (is_null($this->taxMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderChangeTaxModeAction::FIELD_TAX_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxMode = (string)$data;
       }
       return $this->taxMode;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }
    
}