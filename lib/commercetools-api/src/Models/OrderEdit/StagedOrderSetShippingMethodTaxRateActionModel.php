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

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderSetShippingMethodTaxRateActionModel extends JsonObjectModel implements StagedOrderSetShippingMethodTaxRateAction
{
    const DISCRIMINATOR_VALUE = 'setShippingMethodTaxRate';
    public function __construct(
        string $action = null,
        ExternalTaxRateDraft $externalTaxRate = null
    ) {
        $this->action = $action;
        $this->externalTaxRate = $externalTaxRate;
        
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
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRate()
    {
       if (is_null($this->externalTaxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderSetShippingMethodTaxRateAction::FIELD_EXTERNAL_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
       }
       return $this->externalTaxRate;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }
    
}