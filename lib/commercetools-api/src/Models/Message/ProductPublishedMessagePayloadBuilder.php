<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionBuilder;

/**
 * @implements Builder<ProductPublishedMessagePayload>
 */
final class ProductPublishedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?array
     */
    protected $removedImageUrls;
    
    /**
     * @var ?ProductProjectionBuilder|ProductProjection
     */
    protected $productProjection;
    
    /**
     * @var ?string
     */
    protected $scope;

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
     * @return array|null
     */
    final public function getRemovedImageUrls()
    {
       return $this->removedImageUrls;
    }
    
    /**
     *
     * @return ProductProjection|null
     */
    final public function getProductProjection()
    {
       return ($this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getScope()
    {
       return $this->scope;
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
    final public function withRemovedImageUrls(?array $removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductProjection(?ProductProjection $productProjection)
    {
        $this->productProjection = $productProjection;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withScope(?string $scope)
    {
        $this->scope = $scope;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withProductProjectionBuilder(?ProductProjectionBuilder $productProjection)
    {
        $this->productProjection = $productProjection;
        
        return $this;
    }
    
    public function build(): ProductPublishedMessagePayload {
        return new ProductPublishedMessagePayloadModel(
            $this->type,
            $this->removedImageUrls,
            ($this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection),
            $this->scope
        );
    }
    
    public static function of(): ProductPublishedMessagePayloadBuilder
    {
        return new self();
    }
}