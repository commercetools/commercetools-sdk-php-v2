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


final class RequiredFieldErrorModel extends JsonObjectModel implements RequiredFieldError
{
    const DISCRIMINATOR_VALUE = 'RequiredField';
    public function __construct(
        string $code = null,
        string $message = null,
        string $field = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->field = $field;
        
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
     * @var ?string
     */
    protected $field;

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
     * @return string|null
     */
    final public function getField()
    {
       if (is_null($this->field)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(RequiredFieldError::FIELD_FIELD);
           if (is_null($data)) {
               return null;
           }
           $this->field = (string)$data;
       }
       return $this->field;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    final public function setField(?string $field): void
    {
        $this->field = $field;
    }
    
}