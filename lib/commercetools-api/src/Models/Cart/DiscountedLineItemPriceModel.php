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

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;

final class DiscountedLineItemPriceModel extends JsonObjectModel implements DiscountedLineItemPrice
{
    
    public function __construct(
        DiscountedLineItemPortionCollection $includedDiscounts = null,
        TypedMoney $value = null
    ) {
        $this->includedDiscounts = $includedDiscounts;
        $this->value = $value;
        
    }

    /**
     * @var ?DiscountedLineItemPortionCollection
     */
    protected $includedDiscounts;
    
    /**
     * @var ?TypedMoney
     */
    protected $value;

    /**
     *
     * @return DiscountedLineItemPortionCollection|null
     */
    final public function getIncludedDiscounts()
    {
       if (is_null($this->includedDiscounts)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(DiscountedLineItemPrice::FIELD_INCLUDED_DISCOUNTS);
           if (is_null($data)) {
               return null;
           }
           $this->includedDiscounts = DiscountedLineItemPortionCollection::fromArray($data);
       }
       return $this->includedDiscounts;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountedLineItemPrice::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $className = TypedMoneyModel::resolveDiscriminatorClass($data);
           $this->value = $className::of($data);
       }
       return $this->value;
    }
    final public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void
    {
        $this->includedDiscounts = $includedDiscounts;
    }
    
    final public function setValue(?TypedMoney $value): void
    {
        $this->value = $value;
    }
    
}