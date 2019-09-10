<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Cart\CartDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyCarts extends ApiResource
{
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsGet {
      $args = $this->getArgs();
      return new ByProjectKeyInStoreKeyByStoreKeyCartsGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CartDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CartDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsPost {
      $args = $this->getArgs();
      return new ByProjectKeyInStoreKeyByStoreKeyCartsPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
   }
   
}