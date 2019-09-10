<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\ShoppingList\ShoppingListDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyShoppingLists extends ApiResource
{
   /**
    * @psalm-param scalar $key
    */
   public function withKey($key = null): ResourceByProjectKeyShoppingListsKeyByKey {
      $args = $this->getArgs();
      if (!is_null($key)) { $args['key'] = $key; }
      return new ResourceByProjectKeyShoppingListsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyShoppingListsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyShoppingListsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyShoppingListsGet {
      $args = $this->getArgs();
      return new ByProjectKeyShoppingListsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?ShoppingListDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?ShoppingListDraft $body = null, array $headers = []): ByProjectKeyShoppingListsPost {
      $args = $this->getArgs();
      return new ByProjectKeyShoppingListsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}