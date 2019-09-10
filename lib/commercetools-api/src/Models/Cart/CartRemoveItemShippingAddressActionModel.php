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


final class CartRemoveItemShippingAddressActionModel extends JsonObjectModel implements CartRemoveItemShippingAddressAction
{
    const DISCRIMINATOR_VALUE = 'removeItemShippingAddress';
    public function __construct(
        string $action = null,
        string $addressKey = null
    ) {
        $this->action = $action;
        $this->addressKey = $addressKey;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $addressKey;

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
     * @return string|null
     */
    final public function getAddressKey()
    {
       if (is_null($this->addressKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartRemoveItemShippingAddressAction::FIELD_ADDRESS_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->addressKey = (string)$data;
       }
       return $this->addressKey;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAddressKey(?string $addressKey): void
    {
        $this->addressKey = $addressKey;
    }
    
}