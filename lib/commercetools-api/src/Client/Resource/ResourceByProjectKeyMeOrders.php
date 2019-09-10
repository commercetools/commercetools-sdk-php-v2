<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Me\MyOrderFromCartDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMeOrders extends ApiResource
{
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyMeOrdersByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyMeOrdersByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyMeOrdersGet {
      $args = $this->getArgs();
      return new ByProjectKeyMeOrdersGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?MyOrderFromCartDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?MyOrderFromCartDraft $body = null, array $headers = []): ByProjectKeyMeOrdersPost {
      $args = $this->getArgs();
      return new ByProjectKeyMeOrdersPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}