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
 * @implements Builder<InvalidSubjectError>
 */
final class InvalidSubjectErrorBuilder implements Builder
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
    
    public function build(): InvalidSubjectError {
        return new InvalidSubjectErrorModel(
            $this->code,
            $this->message
        );
    }
    
    public static function of(): InvalidSubjectErrorBuilder
    {
        return new self();
    }
}