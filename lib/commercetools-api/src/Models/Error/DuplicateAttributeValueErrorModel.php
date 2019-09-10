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

use Commercetools\Api\Models\Product\Attribute;
use Commercetools\Api\Models\Product\AttributeModel;

final class DuplicateAttributeValueErrorModel extends JsonObjectModel implements DuplicateAttributeValueError
{
    const DISCRIMINATOR_VALUE = 'DuplicateAttributeValue';
    public function __construct(
        string $code = null,
        string $message = null,
        Attribute $attribute = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->attribute = $attribute;
        
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
     * @var ?Attribute
     */
    protected $attribute;

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
     * @return Attribute|null
     */
    final public function getAttribute()
    {
       if (is_null($this->attribute)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DuplicateAttributeValueError::FIELD_ATTRIBUTE);
           if (is_null($data)) {
               return null;
           }
           
           $this->attribute = AttributeModel::of($data);
       }
       return $this->attribute;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    final public function setAttribute(?Attribute $attribute): void
    {
        $this->attribute = $attribute;
    }
    
}