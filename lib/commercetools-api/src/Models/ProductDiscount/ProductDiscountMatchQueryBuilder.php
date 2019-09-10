<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;

/**
 * @implements Builder<ProductDiscountMatchQuery>
 */
final class ProductDiscountMatchQueryBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?PriceBuilder|Price
     */
    protected $price;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @return string|null
     */
    final public function getProductId()
    {
       return $this->productId;
    }
    
    /**
     *
     * @return Price|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof PriceBuilder ? $this->price->build() : $this->price);
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
     * @return int|null
     */
    final public function getVariantId()
    {
       return $this->variantId;
    }
    /**
     * @return $this
     */
    final public function withProductId(?string $productId)
    {
        $this->productId = $productId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPrice(?Price $price)
    {
        $this->price = $price;
        
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
    final public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withPriceBuilder(?PriceBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    public function build(): ProductDiscountMatchQuery {
        return new ProductDiscountMatchQueryModel(
            $this->productId,
            ($this->price instanceof PriceBuilder ? $this->price->build() : $this->price),
            $this->staged,
            $this->variantId
        );
    }
    
    public static function of(): ProductDiscountMatchQueryBuilder
    {
        return new self();
    }
}