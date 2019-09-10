<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\DiscountedLineItemPortionCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class DiscountedLineItemPriceDraftModel extends JsonObjectModel implements DiscountedLineItemPriceDraft
{
    
    public function __construct(
        DiscountedLineItemPortionCollection $includedDiscounts = null,
        Money $value = null
    ) {
        $this->includedDiscounts = $includedDiscounts;
        $this->value = $value;
        
    }

    /**
     * @var ?DiscountedLineItemPortionCollection
     */
    protected $includedDiscounts;
    
    /**
     * @var ?Money
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
           $data = $this->raw(DiscountedLineItemPriceDraft::FIELD_INCLUDED_DISCOUNTS);
           if (is_null($data)) {
               return null;
           }
           $this->includedDiscounts = DiscountedLineItemPortionCollection::fromArray($data);
       }
       return $this->includedDiscounts;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountedLineItemPriceDraft::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           
           $this->value = MoneyModel::of($data);
       }
       return $this->value;
    }
    final public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void
    {
        $this->includedDiscounts = $includedDiscounts;
    }
    
    final public function setValue(?Money $value): void
    {
        $this->value = $value;
    }
    
}