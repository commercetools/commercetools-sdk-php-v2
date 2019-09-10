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
class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?OrderUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?OrderUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}