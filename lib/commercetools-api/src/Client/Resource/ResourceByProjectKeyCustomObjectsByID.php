<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCustomObjectsByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCustomObjectsByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyCustomObjectsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyCustomObjectsByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyCustomObjectsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}