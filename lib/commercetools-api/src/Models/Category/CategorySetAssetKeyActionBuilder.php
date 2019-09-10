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
 * @implements Builder<CategorySetAssetKeyAction>
 */
final class CategorySetAssetKeyActionBuilder implements Builder
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
    
    public function build(): CategorySetAssetKeyAction {
        return new CategorySetAssetKeyActionModel(
            $this->action,
            $this->assetId,
            $this->assetKey
        );
    }
    
    public static function of(): CategorySetAssetKeyActionBuilder
    {
        return new self();
    }
}