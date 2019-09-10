<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ExternalOAuthModel extends JsonObjectModel implements ExternalOAuth
{
    
    public function __construct(
        string $authorizationHeader = null,
        string $url = null
    ) {
        $this->authorizationHeader = $authorizationHeader;
        $this->url = $url;
        
    }

    /**
     * @var ?string
     */
    protected $authorizationHeader;
    
    /**
     * @var ?string
     */
    protected $url;

    /**
     *
     * @return string|null
     */
    final public function getAuthorizationHeader()
    {
       if (is_null($this->authorizationHeader)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ExternalOAuth::FIELD_AUTHORIZATION_HEADER);
           if (is_null($data)) {
               return null;
           }
           $this->authorizationHeader = (string)$data;
       }
       return $this->authorizationHeader;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getUrl()
    {
       if (is_null($this->url)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ExternalOAuth::FIELD_URL);
           if (is_null($data)) {
               return null;
           }
           $this->url = (string)$data;
       }
       return $this->url;
    }
    final public function setAuthorizationHeader(?string $authorizationHeader): void
    {
        $this->authorizationHeader = $authorizationHeader;
    }
    
    final public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
    
}