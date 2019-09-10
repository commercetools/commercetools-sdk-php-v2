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
use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageBuilder;

/**
 * @implements Builder<ProductAddExternalImageAction>
 */
final class ProductAddExternalImageActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ImageBuilder|Image
     */
    protected $image;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?string
     */
    protected $sku;

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
     * @return Image|null
     */
    final public function getImage()
    {
       return ($this->image instanceof ImageBuilder ? $this->image->build() : $this->image);
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
     *
     * @return string|null
     */
    final public function getSku()
    {
       return $this->sku;
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
    final public function withImage(?Image $image)
    {
        $this->image = $image;
        
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
    final public function withSku(?string $sku)
    {
        $this->sku = $sku;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withImageBuilder(?ImageBuilder $image)
    {
        $this->image = $image;
        
        return $this;
    }
    
    public function build(): ProductAddExternalImageAction {
        return new ProductAddExternalImageActionModel(
            $this->action,
            ($this->image instanceof ImageBuilder ? $this->image->build() : $this->image),
            $this->staged,
            $this->variantId,
            $this->sku
        );
    }
    
    public static function of(): ProductAddExternalImageActionBuilder
    {
        return new self();
    }
}