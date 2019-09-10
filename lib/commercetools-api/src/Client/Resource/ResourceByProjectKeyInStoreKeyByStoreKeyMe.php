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
class ResourceByProjectKeyInStoreKeyByStoreKeyMe extends ApiResource
{
   /**
    */
   public function carts(): ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts($this->getUri() . '/carts', $args, $this->getClient());
   }
   /**
    */
   public function orders(): ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders($this->getUri() . '/orders', $args, $this->getClient());
   }
   /**
    */
   public function activeCart(): ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart($this->getUri() . '/active-cart', $args, $this->getClient());
   }
   
}