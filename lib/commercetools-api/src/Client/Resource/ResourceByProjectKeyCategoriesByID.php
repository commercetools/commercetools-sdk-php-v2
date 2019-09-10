<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Category\CategoryUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCategoriesByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCategoriesByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyCategoriesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CategoryUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CategoryUpdate $body = null, array $headers = []): ByProjectKeyCategoriesByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyCategoriesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyCategoriesByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyCategoriesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}