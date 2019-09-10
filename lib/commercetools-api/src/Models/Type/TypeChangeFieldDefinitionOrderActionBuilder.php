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
 * @implements Builder<TypeChangeFieldDefinitionOrderAction>
 */
final class TypeChangeFieldDefinitionOrderActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $fieldNames;

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
     * @return array|null
     */
    final public function getFieldNames()
    {
       return $this->fieldNames;
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
    final public function withFieldNames(?array $fieldNames)
    {
        $this->fieldNames = $fieldNames;
        
        return $this;
    }
    
    public function build(): TypeChangeFieldDefinitionOrderAction {
        return new TypeChangeFieldDefinitionOrderActionModel(
            $this->action,
            $this->fieldNames
        );
    }
    
    public static function of(): TypeChangeFieldDefinitionOrderActionBuilder
    {
        return new self();
    }
}