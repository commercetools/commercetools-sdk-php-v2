<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\State\StateDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyStates extends ApiResource
{
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyStatesByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyStatesByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyStatesGet {
      $args = $this->getArgs();
      return new ByProjectKeyStatesGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?StateDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?StateDraft $body = null, array $headers = []): ByProjectKeyStatesPost {
      $args = $this->getArgs();
      return new ByProjectKeyStatesPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}