<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftBuilder;

/**
 * @implements Builder<CategoryAddAssetAction>
 */
final class CategoryAddAssetActionBuilder implements Builder
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
     * @var ?AssetDraftBuilder|AssetDraft
     */
    protected $asset;

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
     * @return AssetDraft|null
     */
    final public function getAsset()
    {
       return ($this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset);
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
    final public function withAsset(?AssetDraft $asset)
    {
        $this->asset = $asset;
        
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
    
    public function build(): CategoryAddAssetAction {
        return new CategoryAddAssetActionModel(
            $this->action,
            $this->position,
            ($this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset)
        );
    }
    
    public static function of(): CategoryAddAssetActionBuilder
    {
        return new self();
    }
}