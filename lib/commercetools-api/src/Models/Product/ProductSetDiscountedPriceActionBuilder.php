<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceBuilder;

/**
 * @implements Builder<ProductSetDiscountedPriceAction>
 */
final class ProductSetDiscountedPriceActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?DiscountedPriceBuilder|DiscountedPrice
     */
    protected $discounted;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?string
     */
    protected $priceId;

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
     * @return DiscountedPrice|null
     */
    final public function getDiscounted()
    {
       return ($this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted);
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       return $this->staged;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPriceId()
    {
       return $this->priceId;
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
    final public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStaged(?bool $staged)
    {
        $this->staged = $staged;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;
        
        return $this;
    }
    
    public function build(): ProductSetDiscountedPriceAction {
        return new ProductSetDiscountedPriceActionModel(
            $this->action,
            ($this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted),
            $this->staged,
            $this->priceId
        );
    }
    
    public static function of(): ProductSetDiscountedPriceActionBuilder
    {
        return new self();
    }
}