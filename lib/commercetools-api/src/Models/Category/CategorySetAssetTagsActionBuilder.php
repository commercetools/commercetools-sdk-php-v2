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

/**
 * @implements Builder<CategorySetAssetTagsAction>
 */
final class CategorySetAssetTagsActionBuilder implements Builder
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
    protected $assetId;
    
    /**
     * @var ?string
     */
    protected $assetKey;
    
    /**
     * @var ?array
     */
    protected $tags;

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
    final public function getAssetId()
    {
       return $this->assetId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAssetKey()
    {
       return $this->assetKey;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getTags()
    {
       return $this->tags;
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
    final public function withAssetId(?string $assetId)
    {
        $this->assetId = $assetId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAssetKey(?string $assetKey)
    {
        $this->assetKey = $assetKey;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTags(?array $tags)
    {
        $this->tags = $tags;
        
        return $this;
    }
    
    public function build(): CategorySetAssetTagsAction {
        return new CategorySetAssetTagsActionModel(
            $this->action,
            $this->assetId,
            $this->assetKey,
            $this->tags
        );
    }
    
    public static function of(): CategorySetAssetTagsActionBuilder
    {
        return new self();
    }
}