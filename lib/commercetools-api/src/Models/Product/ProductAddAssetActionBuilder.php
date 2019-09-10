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
use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftBuilder;

/**
 * @implements Builder<ProductAddAssetAction>
 */
final class ProductAddAssetActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $position;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?AssetDraftBuilder|AssetDraft
     */
    protected $asset;
    
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
     * @return int|null
     */
    final public function getPosition()
    {
       return $this->position;
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
     * @return AssetDraft|null
     */
    final public function getAsset()
    {
       return ($this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset);
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
    final public function withPosition(?int $position)
    {
        $this->position = $position;
        
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
    final public function withAsset(?AssetDraft $asset)
    {
        $this->asset = $asset;
        
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
    final public function withAssetBuilder(?AssetDraftBuilder $asset)
    {
        $this->asset = $asset;
        
        return $this;
    }
    
    public function build(): ProductAddAssetAction {
        return new ProductAddAssetActionModel(
            $this->action,
            $this->position,
            $this->staged,
            $this->variantId,
            ($this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset),
            $this->sku
        );
    }
    
    public static function of(): ProductAddAssetActionBuilder
    {
        return new self();
    }
}