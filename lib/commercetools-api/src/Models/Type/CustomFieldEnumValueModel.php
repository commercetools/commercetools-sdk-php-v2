<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomFieldEnumValueModel extends JsonObjectModel implements CustomFieldEnumValue
{
    
    public function __construct(
        string $label = null,
        string $key = null
    ) {
        $this->label = $label;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $label;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getLabel()
    {
       if (is_null($this->label)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomFieldEnumValue::FIELD_LABEL);
           if (is_null($data)) {
               return null;
           }
           $this->label = (string)$data;
       }
       return $this->label;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomFieldEnumValue::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setLabel(?string $label): void
    {
        $this->label = $label;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}