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
class ResourceByProjectKeyCategoriesKeyByKey extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCategoriesKeyByKeyGet {
      $args = $this->getArgs();
      return new ByProjectKeyCategoriesKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CategoryUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CategoryUpdate $body = null, array $headers = []): ByProjectKeyCategoriesKeyByKeyPost {
      $args = $this->getArgs();
      return new ByProjectKeyCategoriesKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyCategoriesKeyByKeyDelete {
      $args = $this->getArgs();
      return new ByProjectKeyCategoriesKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   
}