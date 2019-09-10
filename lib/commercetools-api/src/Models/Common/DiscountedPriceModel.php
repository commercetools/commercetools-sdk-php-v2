<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReferenceModel;

final class DiscountedPriceModel extends JsonObjectModel implements DiscountedPrice
{
    
    public function __construct(
        ProductDiscountReference $discount = null,
        Money $value = null
    ) {
        $this->discount = $discount;
        $this->value = $value;
        
    }

    /**
     * @var ?ProductDiscountReference
     */
    protected $discount;
    
    /**
     * @var ?Money
     */
    protected $value;

    /**
     *
     * @return ProductDiscountReference|null
     */
    final public function getDiscount()
    {
       if (is_null($this->discount)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountedPrice::FIELD_DISCOUNT);
           if (is_null($data)) {
               return null;
           }
           
           $this->discount = ProductDiscountReferenceModel::of($data);
       }
       return $this->discount;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountedPrice::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           
           $this->value = MoneyModel::of($data);
       }
       return $this->value;
    }
    final public function setDiscount(?ProductDiscountReference $discount): void
    {
        $this->discount = $discount;
    }
    
    final public function setValue(?Money $value): void
    {
        $this->value = $value;
    }
    
}