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

/**
 * @implements Builder<TypeChangeLocalizedEnumValueLabelAction>
 */
final class TypeChangeLocalizedEnumValueLabelActionBuilder implements Builder
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
     * @var ?CustomFieldLocalizedEnumValueBuilder|CustomFieldLocalizedEnumValue
     */
    protected $value;

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
     * @return CustomFieldLocalizedEnumValue|null
     */
    final public function getValue()
    {
       return ($this->value instanceof CustomFieldLocalizedEnumValueBuilder ? $this->value->build() : $this->value);
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
    final public function withValue(?CustomFieldLocalizedEnumValue $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withValueBuilder(?CustomFieldLocalizedEnumValueBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): TypeChangeLocalizedEnumValueLabelAction {
        return new TypeChangeLocalizedEnumValueLabelActionModel(
            $this->action,
            $this->fieldName,
            ($this->value instanceof CustomFieldLocalizedEnumValueBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): TypeChangeLocalizedEnumValueLabelActionBuilder
    {
        return new self();
    }
}