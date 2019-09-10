<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CartDiscountChangeCartPredicateActionModel extends JsonObjectModel implements CartDiscountChangeCartPredicateAction
{
    const DISCRIMINATOR_VALUE = 'changeCartPredicate';
    public function __construct(
        string $action = null,
        string $cartPredicate = null
    ) {
        $this->action = $action;
        $this->cartPredicate = $cartPredicate;
        
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
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
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
    final public function getCartPredicate()
    {
       if (is_null($this->cartPredicate)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscountChangeCartPredicateAction::FIELD_CART_PREDICATE);
           if (is_null($data)) {
               return null;
           }
           $this->cartPredicate = (string)$data;
       }
       return $this->cartPredicate;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }
    
}