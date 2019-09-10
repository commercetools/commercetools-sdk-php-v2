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
 * @implements Builder<DuplicateFieldError>
 */
final class DuplicateFieldErrorBuilder implements Builder
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
    
    public function build(): DuplicateFieldError {
        return new DuplicateFieldErrorModel(
            $this->code,
            $this->message,
            $this->duplicateValue,
            $this->field
        );
    }
    
    public static function of(): DuplicateFieldErrorBuilder
    {
        return new self();
    }
}