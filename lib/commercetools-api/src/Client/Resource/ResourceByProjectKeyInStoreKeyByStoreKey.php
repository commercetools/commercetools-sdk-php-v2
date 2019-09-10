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
class ResourceByProjectKeyInStoreKeyByStoreKey extends ApiResource
{
   /**
    */
   public function carts(): ResourceByProjectKeyInStoreKeyByStoreKeyCarts {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyInStoreKeyByStoreKeyCarts($this->getUri() . '/carts', $args, $this->getClient());
   }
   /**
    */
   public function orders(): ResourceByProjectKeyInStoreKeyByStoreKeyOrders {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyInStoreKeyByStoreKeyOrders($this->getUri() . '/orders', $args, $this->getClient());
   }
   /**
    */
   public function me(): ResourceByProjectKeyInStoreKeyByStoreKeyMe {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyInStoreKeyByStoreKeyMe($this->getUri() . '/me', $args, $this->getClient());
   }
   
}