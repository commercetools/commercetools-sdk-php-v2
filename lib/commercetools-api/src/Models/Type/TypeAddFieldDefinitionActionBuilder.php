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
 * @implements Builder<TypeAddFieldDefinitionAction>
 */
final class TypeAddFieldDefinitionActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?FieldDefinitionBuilder|FieldDefinition
     */
    protected $fieldDefinition;

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
     * @return FieldDefinition|null
     */
    final public function getFieldDefinition()
    {
       return ($this->fieldDefinition instanceof FieldDefinitionBuilder ? $this->fieldDefinition->build() : $this->fieldDefinition);
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
    final public function withFieldDefinition(?FieldDefinition $fieldDefinition)
    {
        $this->fieldDefinition = $fieldDefinition;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withFieldDefinitionBuilder(?FieldDefinitionBuilder $fieldDefinition)
    {
        $this->fieldDefinition = $fieldDefinition;
        
        return $this;
    }
    
    public function build(): TypeAddFieldDefinitionAction {
        return new TypeAddFieldDefinitionActionModel(
            $this->action,
            ($this->fieldDefinition instanceof FieldDefinitionBuilder ? $this->fieldDefinition->build() : $this->fieldDefinition)
        );
    }
    
    public static function of(): TypeAddFieldDefinitionActionBuilder
    {
        return new self();
    }
}