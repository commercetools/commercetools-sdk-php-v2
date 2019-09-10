<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\DiscountedLineItemPortionCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;

/**
 * @implements Builder<DiscountedLineItemPriceDraft>
 */
final class DiscountedLineItemPriceDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DiscountedLineItemPortionCollection
     */
    protected $includedDiscounts;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $value;

    /**
     *
     * @return DiscountedLineItemPortionCollection|null
     */
    final public function getIncludedDiscounts()
    {
       return $this->includedDiscounts;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getValue()
    {
       return ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value);
    }
    /**
     * @return $this
     */
    final public function withIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts)
    {
        $this->includedDiscounts = $includedDiscounts;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?Money $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): DiscountedLineItemPriceDraft {
        return new DiscountedLineItemPriceDraftModel(
            $this->includedDiscounts,
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): DiscountedLineItemPriceDraftBuilder
    {
        return new self();
    }
}