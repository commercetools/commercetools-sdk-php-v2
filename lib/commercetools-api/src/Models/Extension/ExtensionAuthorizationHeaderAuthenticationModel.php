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


final class ExtensionAuthorizationHeaderAuthenticationModel extends JsonObjectModel implements ExtensionAuthorizationHeaderAuthentication
{
    const DISCRIMINATOR_VALUE = 'AuthorizationHeader';
    public function __construct(
        string $type = null,
        string $headerValue = null
    ) {
        $this->type = $type;
        $this->headerValue = $headerValue;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $headerValue;

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
    final public function getHeaderValue()
    {
       if (is_null($this->headerValue)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ExtensionAuthorizationHeaderAuthentication::FIELD_HEADER_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->headerValue = (string)$data;
       }
       return $this->headerValue;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setHeaderValue(?string $headerValue): void
    {
        $this->headerValue = $headerValue;
    }
    
}