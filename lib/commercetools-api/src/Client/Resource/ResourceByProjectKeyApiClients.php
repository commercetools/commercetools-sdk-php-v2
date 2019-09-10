<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\ApiClient\ApiClientDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyApiClients extends ApiResource
{
   /**
    */
   public function withId(): ResourceByProjectKeyApiClientsByID {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyApiClientsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyApiClientsGet {
      $args = $this->getArgs();
      return new ByProjectKeyApiClientsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?ApiClientDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?ApiClientDraft $body = null, array $headers = []): ByProjectKeyApiClientsPost {
      $args = $this->getArgs();
      return new ByProjectKeyApiClientsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}