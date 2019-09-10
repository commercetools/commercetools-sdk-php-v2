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
 * @implements Builder<DuplicateVariantValuesError>
 */
final class DuplicateVariantValuesErrorBuilder implements Builder
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
     * @var ?VariantValuesBuilder|VariantValues
     */
    protected $variantValues;

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
     * @return VariantValues|null
     */
    final public function getVariantValues()
    {
       return ($this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues);
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
    final public function withVariantValues(?VariantValues $variantValues)
    {
        $this->variantValues = $variantValues;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withVariantValuesBuilder(?VariantValuesBuilder $variantValues)
    {
        $this->variantValues = $variantValues;
        
        return $this;
    }
    
    public function build(): DuplicateVariantValuesError {
        return new DuplicateVariantValuesErrorModel(
            $this->code,
            $this->message,
            ($this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues)
        );
    }
    
    public static function of(): DuplicateVariantValuesErrorBuilder
    {
        return new self();
    }
}