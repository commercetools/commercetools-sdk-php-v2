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


final class ShippingMethodChangeIsDefaultActionModel extends JsonObjectModel implements ShippingMethodChangeIsDefaultAction
{
    const DISCRIMINATOR_VALUE = 'changeIsDefault';
    public function __construct(
        string $action = null,
        bool $isDefault = null
    ) {
        $this->action = $action;
        $this->isDefault = $isDefault;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $isDefault;

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
     * @return bool|null
     */
    final public function getIsDefault()
    {
       if (is_null($this->isDefault)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ShippingMethodChangeIsDefaultAction::FIELD_IS_DEFAULT);
           if (is_null($data)) {
               return null;
           }
           $this->isDefault = (bool)$data;
       }
       return $this->isDefault;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }
    
}