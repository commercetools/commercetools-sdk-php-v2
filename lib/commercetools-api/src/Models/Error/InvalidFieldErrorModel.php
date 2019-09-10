<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class InvalidFieldErrorModel extends JsonObjectModel implements InvalidFieldError
{
    const DISCRIMINATOR_VALUE = 'InvalidField';
    public function __construct(
        string $code = null,
        string $message = null,
        array $allowedValues = null,
        string $field = null,
        JsonObject $invalidValue = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->allowedValues = $allowedValues;
        $this->field = $field;
        $this->invalidValue = $invalidValue;
        
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
       if (is_null($this->code)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->code = (string)$data;
       }
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       if (is_null($this->message)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_MESSAGE);
           if (is_null($data)) {
               return null;
           }
           $this->message = (string)$data;
       }
       return $this->message;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getAllowedValues()
    {
       if (is_null($this->allowedValues)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(InvalidFieldError::FIELD_ALLOWED_VALUES);
           if (is_null($data)) {
               return null;
           }
           $this->allowedValues = $data;
       }
       return $this->allowedValues;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getField()
    {
       if (is_null($this->field)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InvalidFieldError::FIELD_FIELD);
           if (is_null($data)) {
               return null;
           }
           $this->field = (string)$data;
       }
       return $this->field;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getInvalidValue()
    {
       if (is_null($this->invalidValue)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(InvalidFieldError::FIELD_INVALID_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->invalidValue = JsonObjectModel::of($data);
       }
       return $this->invalidValue;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    final public function setAllowedValues(?array $allowedValues): void
    {
        $this->allowedValues = $allowedValues;
    }
    
    final public function setField(?string $field): void
    {
        $this->field = $field;
    }
    
    final public function setInvalidValue(?JsonObject $invalidValue): void
    {
        $this->invalidValue = $invalidValue;
    }
    
}