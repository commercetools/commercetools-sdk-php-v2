<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProjectSetShippingRateInputTypeActionModel extends JsonObjectModel implements ProjectSetShippingRateInputTypeAction
{
    const DISCRIMINATOR_VALUE = 'setShippingRateInputType';
    public function __construct(
        string $action = null,
        ShippingRateInputType $shippingRateInputType = null
    ) {
        $this->action = $action;
        $this->shippingRateInputType = $shippingRateInputType;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ShippingRateInputType
     */
    protected $shippingRateInputType;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProjectUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return ShippingRateInputType|null
     */
    final public function getShippingRateInputType()
    {
       if (is_null($this->shippingRateInputType)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProjectSetShippingRateInputTypeAction::FIELD_SHIPPING_RATE_INPUT_TYPE);
           if (is_null($data)) {
               return null;
           }
           $className = ShippingRateInputTypeModel::resolveDiscriminatorClass($data);
           $this->shippingRateInputType = $className::of($data);
       }
       return $this->shippingRateInputType;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void
    {
        $this->shippingRateInputType = $shippingRateInputType;
    }
    
}