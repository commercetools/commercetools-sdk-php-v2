<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Customer\CustomerUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCustomersKeyByKey extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCustomersKeyByKeyGet {
      $args = $this->getArgs();
      return new ByProjectKeyCustomersKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CustomerUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CustomerUpdate $body = null, array $headers = []): ByProjectKeyCustomersKeyByKeyPost {
      $args = $this->getArgs();
      return new ByProjectKeyCustomersKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyCustomersKeyByKeyDelete {
      $args = $this->getArgs();
      return new ByProjectKeyCustomersKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   
}