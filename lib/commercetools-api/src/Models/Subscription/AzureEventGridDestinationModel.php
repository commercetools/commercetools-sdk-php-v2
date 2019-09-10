<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class AzureEventGridDestinationModel extends JsonObjectModel implements AzureEventGridDestination
{
    const DISCRIMINATOR_VALUE = 'EventGrid';
    public function __construct(
        string $type = null,
        string $accessKey = null,
        string $uri = null
    ) {
        $this->type = $type;
        $this->accessKey = $accessKey;
        $this->uri = $uri;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $accessKey;
    
    /**
     * @var ?string
     */
    protected $uri;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Destination::FIELD_TYPE);
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
    final public function getAccessKey()
    {
       if (is_null($this->accessKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AzureEventGridDestination::FIELD_ACCESS_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->accessKey = (string)$data;
       }
       return $this->accessKey;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getUri()
    {
       if (is_null($this->uri)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AzureEventGridDestination::FIELD_URI);
           if (is_null($data)) {
               return null;
           }
           $this->uri = (string)$data;
       }
       return $this->uri;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setAccessKey(?string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }
    
    final public function setUri(?string $uri): void
    {
        $this->uri = $uri;
    }
    
}