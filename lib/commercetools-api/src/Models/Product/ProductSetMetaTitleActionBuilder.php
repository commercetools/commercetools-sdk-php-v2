<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ProductSetMetaTitleAction>
 */
final class ProductSetMetaTitleActionBuilder implements Builder
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
    protected $metaTitle;
    
    /**
     * @var ?bool
     */
    protected $staged;

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
    final public function getMetaTitle()
    {
       return ($this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle);
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       return $this->staged;
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
    final public function withMetaTitle(?LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStaged(?bool $staged)
    {
        $this->staged = $staged;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;
        
        return $this;
    }
    
    public function build(): ProductSetMetaTitleAction {
        return new ProductSetMetaTitleActionModel(
            $this->action,
            ($this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle),
            $this->staged
        );
    }
    
    public static function of(): ProductSetMetaTitleActionBuilder
    {
        return new self();
    }
}