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


final class ItemShippingTargetModel extends JsonObjectModel implements ItemShippingTarget
{
    
    public function __construct(
        int $quantity = null,
        string $addressKey = null
    ) {
        $this->quantity = $quantity;
        $this->addressKey = $addressKey;
        
    }

    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $addressKey;

    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ItemShippingTarget::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAddressKey()
    {
       if (is_null($this->addressKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ItemShippingTarget::FIELD_ADDRESS_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->addressKey = (string)$data;
       }
       return $this->addressKey;
    }
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setAddressKey(?string $addressKey): void
    {
        $this->addressKey = $addressKey;
    }
    
}