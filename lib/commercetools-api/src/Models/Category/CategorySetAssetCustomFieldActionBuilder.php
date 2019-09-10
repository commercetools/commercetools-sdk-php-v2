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
 * @implements Builder<CategorySetAssetCustomFieldAction>
 */
final class CategorySetAssetCustomFieldActionBuilder implements Builder
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
    protected $name;
    
    /**
     * @var ?JsonObject
     */
    protected $value;
    
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
    final public function getName()
    {
       return $this->name;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getValue()
    {
       return $this->value;
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
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?JsonObject $value)
    {
        $this->value = $value;
        
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
    
    public function build(): CategorySetAssetCustomFieldAction {
        return new CategorySetAssetCustomFieldActionModel(
            $this->action,
            $this->assetId,
            $this->name,
            $this->value,
            $this->assetKey
        );
    }
    
    public static function of(): CategorySetAssetCustomFieldActionBuilder
    {
        return new self();
    }
}