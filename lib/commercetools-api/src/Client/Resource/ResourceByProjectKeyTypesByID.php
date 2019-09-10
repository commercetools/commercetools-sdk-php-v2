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
class ResourceByProjectKeyTypesByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyTypesByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyTypesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?TypeUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?TypeUpdate $body = null, array $headers = []): ByProjectKeyTypesByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyTypesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyTypesByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyTypesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}