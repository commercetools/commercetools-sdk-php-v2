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


final class DiscountedLineItemPriceForQuantityModel extends JsonObjectModel implements DiscountedLineItemPriceForQuantity
{
    
    public function __construct(
        int $quantity = null,
        DiscountedLineItemPrice $discountedPrice = null
    ) {
        $this->quantity = $quantity;
        $this->discountedPrice = $discountedPrice;
        
    }

    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?DiscountedLineItemPrice
     */
    protected $discountedPrice;

    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(DiscountedLineItemPriceForQuantity::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return DiscountedLineItemPrice|null
     */
    final public function getDiscountedPrice()
    {
       if (is_null($this->discountedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountedLineItemPriceForQuantity::FIELD_DISCOUNTED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->discountedPrice = DiscountedLineItemPriceModel::of($data);
       }
       return $this->discountedPrice;
    }
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }
    
}