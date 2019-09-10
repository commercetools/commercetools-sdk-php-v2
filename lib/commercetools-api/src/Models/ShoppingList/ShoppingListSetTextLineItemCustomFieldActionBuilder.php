<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListSetTextLineItemCustomFieldAction>
 */
final class ShoppingListSetTextLineItemCustomFieldActionBuilder implements Builder
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
    protected $name;
    
    /**
     * @var ?JsonObject
     */
    protected $value;
    
    /**
     * @var ?string
     */
    protected $textLineItemId;

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
    final public function getTextLineItemId()
    {
       return $this->textLineItemId;
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
    final public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;
        
        return $this;
    }
    
    public function build(): ShoppingListSetTextLineItemCustomFieldAction {
        return new ShoppingListSetTextLineItemCustomFieldActionModel(
            $this->action,
            $this->name,
            $this->value,
            $this->textLineItemId
        );
    }
    
    public static function of(): ShoppingListSetTextLineItemCustomFieldActionBuilder
    {
        return new self();
    }
}