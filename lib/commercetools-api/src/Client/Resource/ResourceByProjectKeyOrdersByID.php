<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Order\OrderUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyOrdersByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyOrdersByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?OrderUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?OrderUpdate $body = null, array $headers = []): ByProjectKeyOrdersByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyOrdersByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}