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
 * @implements Builder<ShoppingListSetSlugAction>
 */
final class ShoppingListSetSlugActionBuilder implements Builder
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
    protected $slug;

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
    final public function getSlug()
    {
       return ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug);
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
    final public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    public function build(): ShoppingListSetSlugAction {
        return new ShoppingListSetSlugActionModel(
            $this->action,
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug)
        );
    }
    
    public static function of(): ShoppingListSetSlugActionBuilder
    {
        return new self();
    }
}