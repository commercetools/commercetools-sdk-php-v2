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
 * @implements Builder<DiscountCodeInfo>
 */
final class DiscountCodeInfoBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DiscountCodeReferenceBuilder|DiscountCodeReference
     */
    protected $discountCode;
    
    /**
     * @var ?string
     */
    protected $state;

    /**
     *
     * @return DiscountCodeReference|null
     */
    final public function getDiscountCode()
    {
       return ($this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       return $this->state;
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
    final public function withState(?string $state)
    {
        $this->state = $state;
        
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
    
    public function build(): DiscountCodeInfo {
        return new DiscountCodeInfoModel(
            ($this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode),
            $this->state
        );
    }
    
    public static function of(): DiscountCodeInfoBuilder
    {
        return new self();
    }
}