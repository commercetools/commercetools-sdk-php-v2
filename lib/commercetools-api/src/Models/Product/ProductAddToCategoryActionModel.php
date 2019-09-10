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

final class ProductAddToCategoryActionModel extends JsonObjectModel implements ProductAddToCategoryAction
{
    const DISCRIMINATOR_VALUE = 'addToCategory';
    public function __construct(
        string $action = null,
        string $orderHint = null,
        bool $staged = null,
        CategoryResourceIdentifier $category = null
    ) {
        $this->action = $action;
        $this->orderHint = $orderHint;
        $this->staged = $staged;
        $this->category = $category;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $orderHint;
    
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
     * @return string|null
     */
    final public function getOrderHint()
    {
       if (is_null($this->orderHint)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductAddToCategoryAction::FIELD_ORDER_HINT);
           if (is_null($data)) {
               return null;
           }
           $this->orderHint = (string)$data;
       }
       return $this->orderHint;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductAddToCategoryAction::FIELD_STAGED);
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
           $data = $this->raw(ProductAddToCategoryAction::FIELD_CATEGORY);
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
    
    final public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
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