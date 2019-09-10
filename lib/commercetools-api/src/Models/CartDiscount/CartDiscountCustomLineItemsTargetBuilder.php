<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountCustomLineItemsTarget>
 */
final class CartDiscountCustomLineItemsTargetBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $predicate;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPredicate()
    {
       return $this->predicate;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;
        
        return $this;
    }
    
    public function build(): CartDiscountCustomLineItemsTarget {
        return new CartDiscountCustomLineItemsTargetModel(
            $this->type,
            $this->predicate
        );
    }
    
    public static function of(): CartDiscountCustomLineItemsTargetBuilder
    {
        return new self();
    }
}