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
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceBuilder;

/**
 * @implements Builder<CartRemoveDiscountCodeAction>
 */
final class CartRemoveDiscountCodeActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?DiscountCodeReferenceBuilder|DiscountCodeReference
     */
    protected $discountCode;

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
     * @return DiscountCodeReference|null
     */
    final public function getDiscountCode()
    {
       return ($this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode);
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
    final public function withDiscountCode(?DiscountCodeReference $discountCode)
    {
        $this->discountCode = $discountCode;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDiscountCodeBuilder(?DiscountCodeReferenceBuilder $discountCode)
    {
        $this->discountCode = $discountCode;
        
        return $this;
    }
    
    public function build(): CartRemoveDiscountCodeAction {
        return new CartRemoveDiscountCodeActionModel(
            $this->action,
            ($this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode)
        );
    }
    
    public static function of(): CartRemoveDiscountCodeActionBuilder
    {
        return new self();
    }
}