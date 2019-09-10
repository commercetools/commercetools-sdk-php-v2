<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ItemShippingTarget>
 */
final class ItemShippingTargetBuilder implements Builder
{
    public function __construct() {
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
       return $this->quantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAddressKey()
    {
       return $this->addressKey;
    }
    /**
     * @return $this
     */
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAddressKey(?string $addressKey)
    {
        $this->addressKey = $addressKey;
        
        return $this;
    }
    
    public function build(): ItemShippingTarget {
        return new ItemShippingTargetModel(
            $this->quantity,
            $this->addressKey
        );
    }
    
    public static function of(): ItemShippingTargetBuilder
    {
        return new self();
    }
}