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


final class DuplicateVariantValuesErrorModel extends JsonObjectModel implements DuplicateVariantValuesError
{
    const DISCRIMINATOR_VALUE = 'DuplicateVariantValues';
    public function __construct(
        string $code = null,
        string $message = null,
        VariantValues $variantValues = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->variantValues = $variantValues;
        
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
     * @var ?VariantValues
     */
    protected $variantValues;

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
     * @return VariantValues|null
     */
    final public function getVariantValues()
    {
       if (is_null($this->variantValues)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DuplicateVariantValuesError::FIELD_VARIANT_VALUES);
           if (is_null($data)) {
               return null;
           }
           
           $this->variantValues = VariantValuesModel::of($data);
       }
       return $this->variantValues;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    final public function setVariantValues(?VariantValues $variantValues): void
    {
        $this->variantValues = $variantValues;
    }
    
}