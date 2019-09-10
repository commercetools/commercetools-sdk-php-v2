<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ExtensionAzureFunctionsAuthenticationModel extends JsonObjectModel implements ExtensionAzureFunctionsAuthentication
{
    const DISCRIMINATOR_VALUE = 'AzureFunctions';
    public function __construct(
        string $type = null,
        string $key = null
    ) {
        $this->type = $type;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ExtensionHttpDestinationAuthentication::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ExtensionAzureFunctionsAuthentication::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}