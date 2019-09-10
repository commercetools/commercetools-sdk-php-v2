<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InvalidFieldError>
 */
final class InvalidFieldErrorBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?string
     */
    protected $message;
    
    /**
     * @var ?array
     */
    protected $allowedValues;
    
    /**
     * @var ?string
     */
    protected $field;
    
    /**
     * @var ?JsonObject
     */
    protected $invalidValue;

    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       return $this->message;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getAllowedValues()
    {
       return $this->allowedValues;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getField()
    {
       return $this->field;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getInvalidValue()
    {
       return $this->invalidValue;
    }
    /**
     * @return $this
     */
    final public function withCode(?string $code)
    {
        $this->code = $code;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessage(?string $message)
    {
        $this->message = $message;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAllowedValues(?array $allowedValues)
    {
        $this->allowedValues = $allowedValues;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withField(?string $field)
    {
        $this->field = $field;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInvalidValue(?JsonObject $invalidValue)
    {
        $this->invalidValue = $invalidValue;
        
        return $this;
    }
    
    public function build(): InvalidFieldError {
        return new InvalidFieldErrorModel(
            $this->code,
            $this->message,
            $this->allowedValues,
            $this->field,
            $this->invalidValue
        );
    }
    
    public static function of(): InvalidFieldErrorBuilder
    {
        return new self();
    }
}