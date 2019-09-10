<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\CustomObject\CustomObjectDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCustomObjects extends ApiResource
{
   /**
    * @psalm-param scalar $key
    */
   public function withContainerAndKey($key = null): ResourceByProjectKeyCustomObjectsByContainerByKey {
      $args = $this->getArgs();
      if (!is_null($key)) { $args['key'] = $key; }
      return new ResourceByProjectKeyCustomObjectsByContainerByKey($this->getUri() . '/{container}/{key}', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $container
    */
   public function withId($container = null): ResourceByProjectKeyCustomObjectsByID {
      $args = $this->getArgs();
      if (!is_null($container)) { $args['container'] = $container; }
      return new ResourceByProjectKeyCustomObjectsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCustomObjectsGet {
      $args = $this->getArgs();
      return new ByProjectKeyCustomObjectsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CustomObjectDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CustomObjectDraft $body = null, array $headers = []): ByProjectKeyCustomObjectsPost {
      $args = $this->getArgs();
      return new ByProjectKeyCustomObjectsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}