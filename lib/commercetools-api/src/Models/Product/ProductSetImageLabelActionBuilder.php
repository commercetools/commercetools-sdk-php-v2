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

/**
 * @implements Builder<ProductSetImageLabelAction>
 */
final class ProductSetImageLabelActionBuilder implements Builder
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
    protected $imageUrl;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?string
     */
    protected $label;
    
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
     * @return string|null
     */
    final public function getImageUrl()
    {
       return $this->imageUrl;
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
    final public function getLabel()
    {
       return $this->label;
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
    final public function withImageUrl(?string $imageUrl)
    {
        $this->imageUrl = $imageUrl;
        
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
    final public function withLabel(?string $label)
    {
        $this->label = $label;
        
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
    
    public function build(): ProductSetImageLabelAction {
        return new ProductSetImageLabelActionModel(
            $this->action,
            $this->imageUrl,
            $this->staged,
            $this->label,
            $this->variantId,
            $this->sku
        );
    }
    
    public static function of(): ProductSetImageLabelActionBuilder
    {
        return new self();
    }
}