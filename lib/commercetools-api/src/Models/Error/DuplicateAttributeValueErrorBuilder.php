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
use Commercetools\Api\Models\Product\Attribute;
use Commercetools\Api\Models\Product\AttributeBuilder;

/**
 * @implements Builder<DuplicateAttributeValueError>
 */
final class DuplicateAttributeValueErrorBuilder implements Builder
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
     * @var ?AttributeBuilder|Attribute
     */
    protected $attribute;

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
     * @return Attribute|null
     */
    final public function getAttribute()
    {
       return ($this->attribute instanceof AttributeBuilder ? $this->attribute->build() : $this->attribute);
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
    final public function withAttribute(?Attribute $attribute)
    {
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAttributeBuilder(?AttributeBuilder $attribute)
    {
        $this->attribute = $attribute;
        
        return $this;
    }
    
    public function build(): DuplicateAttributeValueError {
        return new DuplicateAttributeValueErrorModel(
            $this->code,
            $this->message,
            ($this->attribute instanceof AttributeBuilder ? $this->attribute->build() : $this->attribute)
        );
    }
    
    public static function of(): DuplicateAttributeValueErrorBuilder
    {
        return new self();
    }
}