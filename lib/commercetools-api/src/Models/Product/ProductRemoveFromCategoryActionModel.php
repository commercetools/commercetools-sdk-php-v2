<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Category\CategoryResourceIdentifier;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierModel;

final class ProductRemoveFromCategoryActionModel extends JsonObjectModel implements ProductRemoveFromCategoryAction
{
    const DISCRIMINATOR_VALUE = 'removeFromCategory';
    public function __construct(
        string $action = null,
        bool $staged = null,
        CategoryResourceIdentifier $category = null
    ) {
        $this->action = $action;
        $this->staged = $staged;
        $this->category = $category;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?CategoryResourceIdentifier
     */
    protected $category;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductRemoveFromCategoryAction::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return CategoryResourceIdentifier|null
     */
    final public function getCategory()
    {
       if (is_null($this->category)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductRemoveFromCategoryAction::FIELD_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->category = CategoryResourceIdentifierModel::of($data);
       }
       return $this->category;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setCategory(?CategoryResourceIdentifier $category): void
    {
        $this->category = $category;
    }
    
}