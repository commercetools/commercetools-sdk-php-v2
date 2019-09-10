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
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ProductTypeSetInputTipAction>
 */
final class ProductTypeSetInputTipActionBuilder implements Builder
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
    protected $attributeName;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $inputTip;

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
    final public function getAttributeName()
    {
       return $this->attributeName;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getInputTip()
    {
       return ($this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip);
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
    final public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInputTip(?LocalizedString $inputTip)
    {
        $this->inputTip = $inputTip;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withInputTipBuilder(?LocalizedStringBuilder $inputTip)
    {
        $this->inputTip = $inputTip;
        
        return $this;
    }
    
    public function build(): ProductTypeSetInputTipAction {
        return new ProductTypeSetInputTipActionModel(
            $this->action,
            $this->attributeName,
            ($this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip)
        );
    }
    
    public static function of(): ProductTypeSetInputTipActionBuilder
    {
        return new self();
    }
}