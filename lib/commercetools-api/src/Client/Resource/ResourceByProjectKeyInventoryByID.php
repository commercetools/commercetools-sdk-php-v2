<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Inventory\InventoryEntryUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInventoryByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyInventoryByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyInventoryByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?InventoryEntryUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?InventoryEntryUpdate $body = null, array $headers = []): ByProjectKeyInventoryByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyInventoryByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyInventoryByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyInventoryByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}