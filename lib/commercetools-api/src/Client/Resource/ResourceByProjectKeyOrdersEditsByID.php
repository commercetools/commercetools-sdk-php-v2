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
class ResourceByProjectKeyOrdersEditsByID extends ApiResource
{
   /**
    */
   public function apply(): ResourceByProjectKeyOrdersEditsByIDApply {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyOrdersEditsByIDApply($this->getUri() . '/apply', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyOrdersEditsByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?Update $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?Update $body = null, array $headers = []): ByProjectKeyOrdersEditsByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyOrdersEditsByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}