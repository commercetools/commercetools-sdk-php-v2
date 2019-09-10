<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeDraft>
 */
final class ProductTypeDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $description;
    
    /**
     * @var ?AttributeDefinitionDraftCollection
     */
    protected $attributes;
    
    /**
     * @var ?string
     */
    protected $key;

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
     * @return string|null
     */
    final public function getDescription()
    {
       return $this->description;
    }
    
    /**
     *
     * @return AttributeDefinitionDraftCollection|null
     */
    final public function getAttributes()
    {
       return $this->attributes;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
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
    final public function withDescription(?string $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAttributes(?AttributeDefinitionDraftCollection $attributes)
    {
        $this->attributes = $attributes;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    public function build(): ProductTypeDraft {
        return new ProductTypeDraftModel(
            $this->name,
            $this->description,
            $this->attributes,
            $this->key
        );
    }
    
    public static function of(): ProductTypeDraftBuilder
    {
        return new self();
    }
}