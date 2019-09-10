<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;

final class ProductDiscountMatchQueryModel extends JsonObjectModel implements ProductDiscountMatchQuery
{
    
    public function __construct(
        string $productId = null,
        Price $price = null,
        bool $staged = null,
        int $variantId = null
    ) {
        $this->productId = $productId;
        $this->price = $price;
        $this->staged = $staged;
        $this->variantId = $variantId;
        
    }

    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?Price
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
       if (is_null($this->productId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscountMatchQuery::FIELD_PRODUCT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->productId = (string)$data;
       }
       return $this->productId;
    }
    
    /**
     *
     * @return Price|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductDiscountMatchQuery::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->price = PriceModel::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductDiscountMatchQuery::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       if (is_null($this->variantId)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductDiscountMatchQuery::FIELD_VARIANT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->variantId = (int)$data;
       }
       return $this->variantId;
    }
    final public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }
    
    final public function setPrice(?Price $price): void
    {
        $this->price = $price;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
    
}