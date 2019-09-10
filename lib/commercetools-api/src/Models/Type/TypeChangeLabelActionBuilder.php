<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<TypeChangeLabelAction>
 */
final class TypeChangeLabelActionBuilder implements Builder
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
    protected $fieldName;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $label;

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
    final public function getFieldName()
    {
       return $this->fieldName;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getLabel()
    {
       return ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label);
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
    final public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;
        
        return $this;
    }
    
    public function build(): TypeChangeLabelAction {
        return new TypeChangeLabelActionModel(
            $this->action,
            $this->fieldName,
            ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label)
        );
    }
    
    public static function of(): TypeChangeLabelActionBuilder
    {
        return new self();
    }
}