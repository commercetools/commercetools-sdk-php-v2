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
class ResourceByProjectKeyMeCartsByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyMeCartsByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyMeCartsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?Update $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?Update $body = null, array $headers = []): ByProjectKeyMeCartsByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyMeCartsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyMeCartsByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyMeCartsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}