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
 * @implements Builder<TypeRemoveFieldDefinitionAction>
 */
final class TypeRemoveFieldDefinitionActionBuilder implements Builder
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
    
    public function build(): TypeRemoveFieldDefinitionAction {
        return new TypeRemoveFieldDefinitionActionModel(
            $this->action,
            $this->fieldName
        );
    }
    
    public static function of(): TypeRemoveFieldDefinitionActionBuilder
    {
        return new self();
    }
}