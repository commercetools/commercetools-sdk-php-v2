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

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;

final class DuplicateFieldWithConflictingResourceErrorModel extends JsonObjectModel implements DuplicateFieldWithConflictingResourceError
{
    const DISCRIMINATOR_VALUE = 'DuplicateFieldWithConflictingResource';
    public function __construct(
        string $code = null,
        string $message = null,
        Reference $conflictingResource = null,
        JsonObject $duplicateValue = null,
        string $field = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->conflictingResource = $conflictingResource;
        $this->duplicateValue = $duplicateValue;
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
     * @var ?Reference
     */
    protected $conflictingResource;
    
    /**
     * @var ?JsonObject
     */
    protected $duplicateValue;
    
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
     * @return Reference|null
     */
    final public function getConflictingResource()
    {
       if (is_null($this->conflictingResource)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DuplicateFieldWithConflictingResourceError::FIELD_CONFLICTING_RESOURCE);
           if (is_null($data)) {
               return null;
           }
           $className = ReferenceModel::resolveDiscriminatorClass($data);
           $this->conflictingResource = $className::of($data);
       }
       return $this->conflictingResource;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getDuplicateValue()
    {
       if (is_null($this->duplicateValue)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(DuplicateFieldWithConflictingResourceError::FIELD_DUPLICATE_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->duplicateValue = JsonObjectModel::of($data);
       }
       return $this->duplicateValue;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getField()
    {
       if (is_null($this->field)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(DuplicateFieldWithConflictingResourceError::FIELD_FIELD);
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
    
    final public function setConflictingResource(?Reference $conflictingResource): void
    {
        $this->conflictingResource = $conflictingResource;
    }
    
    final public function setDuplicateValue(?JsonObject $duplicateValue): void
    {
        $this->duplicateValue = $duplicateValue;
    }
    
    final public function setField(?string $field): void
    {
        $this->field = $field;
    }
    
}