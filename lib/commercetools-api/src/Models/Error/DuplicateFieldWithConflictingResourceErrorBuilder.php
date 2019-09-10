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
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<DuplicateFieldWithConflictingResourceError>
 */
final class DuplicateFieldWithConflictingResourceErrorBuilder implements Builder
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
     * @var ?ReferenceBuilder|Reference
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
     * @return Reference|null
     */
    final public function getConflictingResource()
    {
       return ($this->conflictingResource instanceof ReferenceBuilder ? $this->conflictingResource->build() : $this->conflictingResource);
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getDuplicateValue()
    {
       return $this->duplicateValue;
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
    final public function withConflictingResource(?Reference $conflictingResource)
    {
        $this->conflictingResource = $conflictingResource;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDuplicateValue(?JsonObject $duplicateValue)
    {
        $this->duplicateValue = $duplicateValue;
        
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
    final public function withConflictingResourceBuilder(?ReferenceBuilder $conflictingResource)
    {
        $this->conflictingResource = $conflictingResource;
        
        return $this;
    }
    
    public function build(): DuplicateFieldWithConflictingResourceError {
        return new DuplicateFieldWithConflictingResourceErrorModel(
            $this->code,
            $this->message,
            ($this->conflictingResource instanceof ReferenceBuilder ? $this->conflictingResource->build() : $this->conflictingResource),
            $this->duplicateValue,
            $this->field
        );
    }
    
    public static function of(): DuplicateFieldWithConflictingResourceErrorBuilder
    {
        return new self();
    }
}