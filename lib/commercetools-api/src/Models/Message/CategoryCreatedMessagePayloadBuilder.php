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
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryBuilder;

/**
 * @implements Builder<CategoryCreatedMessagePayload>
 */
final class CategoryCreatedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?CategoryBuilder|Category
     */
    protected $category;

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
     * @return Category|null
     */
    final public function getCategory()
    {
       return ($this->category instanceof CategoryBuilder ? $this->category->build() : $this->category);
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
    final public function withCategory(?Category $category)
    {
        $this->category = $category;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCategoryBuilder(?CategoryBuilder $category)
    {
        $this->category = $category;
        
        return $this;
    }
    
    public function build(): CategoryCreatedMessagePayload {
        return new CategoryCreatedMessagePayloadModel(
            $this->type,
            ($this->category instanceof CategoryBuilder ? $this->category->build() : $this->category)
        );
    }
    
    public static function of(): CategoryCreatedMessagePayloadBuilder
    {
        return new self();
    }
}