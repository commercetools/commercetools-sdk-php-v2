<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Common\Update;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyOrdersEditsKeyByKey extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyOrdersEditsKeyByKeyGet {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?Update $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?Update $body = null, array $headers = []): ByProjectKeyOrdersEditsKeyByKeyPost {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyOrdersEditsKeyByKeyDelete {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   
}