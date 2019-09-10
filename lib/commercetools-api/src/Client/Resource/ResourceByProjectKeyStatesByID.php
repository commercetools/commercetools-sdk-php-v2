<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\State\StateUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyStatesByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyStatesByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyStatesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?StateUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?StateUpdate $body = null, array $headers = []): ByProjectKeyStatesByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyStatesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyStatesByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyStatesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}