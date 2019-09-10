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
class ResourceByProjectKeyCarts extends ApiResource
{
   /**
    */
   public function replicate(): ResourceByProjectKeyCartsReplicate {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyCartsReplicate($this->getUri() . '/replicate', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyCartsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyCartsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCartsGet {
      $args = $this->getArgs();
      return new ByProjectKeyCartsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CartDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CartDraft $body = null, array $headers = []): ByProjectKeyCartsPost {
      $args = $this->getArgs();
      return new ByProjectKeyCartsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}