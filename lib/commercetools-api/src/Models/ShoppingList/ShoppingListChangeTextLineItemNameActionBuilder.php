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
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ShoppingListChangeTextLineItemNameAction>
 */
final class ShoppingListChangeTextLineItemNameActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
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
     * @return LocalizedString|null
     */
    final public function getName()
    {
       return ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name);
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
    final public function withName(?LocalizedString $name)
    {
        $this->name = $name;
        
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
    /**
     * @return $this
     */
    final public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function build(): ShoppingListChangeTextLineItemNameAction {
        return new ShoppingListChangeTextLineItemNameActionModel(
            $this->action,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->textLineItemId
        );
    }
    
    public static function of(): ShoppingListChangeTextLineItemNameActionBuilder
    {
        return new self();
    }
}