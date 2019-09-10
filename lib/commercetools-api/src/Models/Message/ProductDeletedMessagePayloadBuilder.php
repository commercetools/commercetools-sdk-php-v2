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
 * @implements Builder<ProductDeletedMessagePayload>
 */
final class ProductDeletedMessagePayloadBuilder implements Builder
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
    protected $currentProjection;

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
    final public function getCurrentProjection()
    {
       return ($this->currentProjection instanceof ProductProjectionBuilder ? $this->currentProjection->build() : $this->currentProjection);
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
    final public function withCurrentProjection(?ProductProjection $currentProjection)
    {
        $this->currentProjection = $currentProjection;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCurrentProjectionBuilder(?ProductProjectionBuilder $currentProjection)
    {
        $this->currentProjection = $currentProjection;
        
        return $this;
    }
    
    public function build(): ProductDeletedMessagePayload {
        return new ProductDeletedMessagePayloadModel(
            $this->type,
            $this->removedImageUrls,
            ($this->currentProjection instanceof ProductProjectionBuilder ? $this->currentProjection->build() : $this->currentProjection)
        );
    }
    
    public static function of(): ProductDeletedMessagePayloadBuilder
    {
        return new self();
    }
}