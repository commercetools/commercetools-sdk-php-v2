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
 * @implements Builder<InvalidItemShippingDetailsError>
 */
final class InvalidItemShippingDetailsErrorBuilder implements Builder
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
     * @var ?string
     */
    protected $itemId;
    
    /**
     * @var ?string
     */
    protected $subject;

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
     * @return string|null
     */
    final public function getItemId()
    {
       return $this->itemId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSubject()
    {
       return $this->subject;
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
    final public function withItemId(?string $itemId)
    {
        $this->itemId = $itemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSubject(?string $subject)
    {
        $this->subject = $subject;
        
        return $this;
    }
    
    public function build(): InvalidItemShippingDetailsError {
        return new InvalidItemShippingDetailsErrorModel(
            $this->code,
            $this->message,
            $this->itemId,
            $this->subject
        );
    }
    
    public static function of(): InvalidItemShippingDetailsErrorBuilder
    {
        return new self();
    }
}