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
 * @implements Builder<TypeChangeInputHintAction>
 */
final class TypeChangeInputHintActionBuilder implements Builder
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
     * @var ?string
     */
    protected $inputHint;

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
     * @return string|null
     */
    final public function getInputHint()
    {
       return $this->inputHint;
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
    final public function withInputHint(?string $inputHint)
    {
        $this->inputHint = $inputHint;
        
        return $this;
    }
    
    public function build(): TypeChangeInputHintAction {
        return new TypeChangeInputHintActionModel(
            $this->action,
            $this->fieldName,
            $this->inputHint
        );
    }
    
    public static function of(): TypeChangeInputHintActionBuilder
    {
        return new self();
    }
}