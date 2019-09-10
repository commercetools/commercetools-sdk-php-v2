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
 * @implements Builder<ErrorResponse>
 */
final class ErrorResponseBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $error_description;
    
    /**
     * @var ?string
     */
    protected $error;
    
    /**
     * @var ?string
     */
    protected $message;
    
    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;
    
    /**
     * @var ?int
     */
    protected $statusCode;

    /**
     *
     * @return string|null
     */
    final public function getError_description()
    {
       return $this->error_description;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getError()
    {
       return $this->error;
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
     * @return ErrorObjectCollection|null
     */
    final public function getErrors()
    {
       return $this->errors;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getStatusCode()
    {
       return $this->statusCode;
    }
    /**
     * @return $this
     */
    final public function withError_description(?string $error_description)
    {
        $this->error_description = $error_description;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withError(?string $error)
    {
        $this->error = $error;
        
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
    final public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStatusCode(?int $statusCode)
    {
        $this->statusCode = $statusCode;
        
        return $this;
    }
    
    public function build(): ErrorResponse {
        return new ErrorResponseModel(
            $this->error_description,
            $this->error,
            $this->message,
            $this->errors,
            $this->statusCode
        );
    }
    
    public static function of(): ErrorResponseBuilder
    {
        return new self();
    }
}