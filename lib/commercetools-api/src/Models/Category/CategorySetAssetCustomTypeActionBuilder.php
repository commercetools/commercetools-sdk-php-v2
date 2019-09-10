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
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;

/**
 * @implements Builder<CategorySetAssetCustomTypeAction>
 */
final class CategorySetAssetCustomTypeActionBuilder implements Builder
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
     * @var ?JsonObject
     */
    protected $fields;
    
    /**
     * @var ?TypeResourceIdentifierBuilder|TypeResourceIdentifier
     */
    protected $type;
    
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
     * @return JsonObject|null
     */
    final public function getFields()
    {
       return $this->fields;
    }
    
    /**
     *
     * @return TypeResourceIdentifier|null
     */
    final public function getType()
    {
       return ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type);
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
    final public function withFields(?JsonObject $fields)
    {
        $this->fields = $fields;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withType(?TypeResourceIdentifier $type)
    {
        $this->type = $type;
        
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
    final public function withTypeBuilder(?TypeResourceIdentifierBuilder $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    public function build(): CategorySetAssetCustomTypeAction {
        return new CategorySetAssetCustomTypeActionModel(
            $this->action,
            $this->assetId,
            $this->fields,
            ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type),
            $this->assetKey
        );
    }
    
    public static function of(): CategorySetAssetCustomTypeActionBuilder
    {
        return new self();
    }
}