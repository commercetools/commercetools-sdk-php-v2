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
 * @implements Builder<TypeAddEnumValueAction>
 */
final class TypeAddEnumValueActionBuilder implements Builder
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
     * @var ?CustomFieldEnumValueBuilder|CustomFieldEnumValue
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
     * @return CustomFieldEnumValue|null
     */
    final public function getValue()
    {
       return ($this->value instanceof CustomFieldEnumValueBuilder ? $this->value->build() : $this->value);
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
    final public function withValue(?CustomFieldEnumValue $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withValueBuilder(?CustomFieldEnumValueBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): TypeAddEnumValueAction {
        return new TypeAddEnumValueActionModel(
            $this->action,
            $this->fieldName,
            ($this->value instanceof CustomFieldEnumValueBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): TypeAddEnumValueActionBuilder
    {
        return new self();
    }
}