<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Me\MyCartDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMeCarts extends ApiResource
{
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyMeCartsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyMeCartsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyMeCartsGet {
      $args = $this->getArgs();
      return new ByProjectKeyMeCartsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?MyCartDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?MyCartDraft $body = null, array $headers = []): ByProjectKeyMeCartsPost {
      $args = $this->getArgs();
      return new ByProjectKeyMeCartsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}