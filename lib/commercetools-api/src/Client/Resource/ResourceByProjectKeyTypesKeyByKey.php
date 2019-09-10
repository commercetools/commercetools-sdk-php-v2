<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Type\TypeUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyTypesKeyByKey extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyTypesKeyByKeyGet {
      $args = $this->getArgs();
      return new ByProjectKeyTypesKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?TypeUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?TypeUpdate $body = null, array $headers = []): ByProjectKeyTypesKeyByKeyPost {
      $args = $this->getArgs();
      return new ByProjectKeyTypesKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyTypesKeyByKeyDelete {
      $args = $this->getArgs();
      return new ByProjectKeyTypesKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   
}