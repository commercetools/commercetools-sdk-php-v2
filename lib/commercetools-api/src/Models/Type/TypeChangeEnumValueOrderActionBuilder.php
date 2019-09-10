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
 * @implements Builder<TypeChangeEnumValueOrderAction>
 */
final class TypeChangeEnumValueOrderActionBuilder implements Builder
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
     * @var ?array
     */
    protected $keys;

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
     * @return array|null
     */
    final public function getKeys()
    {
       return $this->keys;
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
    final public function withKeys(?array $keys)
    {
        $this->keys = $keys;
        
        return $this;
    }
    
    public function build(): TypeChangeEnumValueOrderAction {
        return new TypeChangeEnumValueOrderActionModel(
            $this->action,
            $this->fieldName,
            $this->keys
        );
    }
    
    public static function of(): TypeChangeEnumValueOrderActionBuilder
    {
        return new self();
    }
}