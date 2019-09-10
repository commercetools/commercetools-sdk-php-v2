<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Product\ProductUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductsByID extends ApiResource
{
   /**
    */
   public function images(): ResourceByProjectKeyProductsByIDImages {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyProductsByIDImages($this->getUri() . '/images', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyProductsByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyProductsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?ProductUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?ProductUpdate $body = null, array $headers = []): ByProjectKeyProductsByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyProductsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyProductsByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyProductsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}