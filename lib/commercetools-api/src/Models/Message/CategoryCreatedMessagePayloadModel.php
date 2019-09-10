<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryModel;

final class CategoryCreatedMessagePayloadModel extends JsonObjectModel implements CategoryCreatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CategoryCreated';
    public function __construct(
        string $type = null,
        Category $category = null
    ) {
        $this->type = $type;
        $this->category = $category;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?Category
     */
    protected $category;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return Category|null
     */
    final public function getCategory()
    {
       if (is_null($this->category)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CategoryCreatedMessagePayload::FIELD_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->category = CategoryModel::of($data);
       }
       return $this->category;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setCategory(?Category $category): void
    {
        $this->category = $category;
    }
    
}