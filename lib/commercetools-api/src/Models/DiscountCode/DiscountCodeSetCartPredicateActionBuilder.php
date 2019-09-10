<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeSetCartPredicateAction>
 */
final class DiscountCodeSetCartPredicateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $cartPredicate;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCartPredicate()
    {
       return $this->cartPredicate;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCartPredicate(?string $cartPredicate)
    {
        $this->cartPredicate = $cartPredicate;
        
        return $this;
    }
    
    public function build(): DiscountCodeSetCartPredicateAction {
        return new DiscountCodeSetCartPredicateActionModel(
            $this->action,
            $this->cartPredicate
        );
    }
    
    public static function of(): DiscountCodeSetCartPredicateActionBuilder
    {
        return new self();
    }
}