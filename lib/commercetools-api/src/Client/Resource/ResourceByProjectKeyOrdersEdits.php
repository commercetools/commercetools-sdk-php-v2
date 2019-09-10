<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\OrderEdit\OrderEditDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyOrdersEdits extends ApiResource
{
   /**
    * @psalm-param scalar $ID
    */
   public function withKey($ID = null): ResourceByProjectKeyOrdersEditsKeyByKey {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyOrdersEditsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyOrdersEditsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyOrdersEditsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyOrdersEditsGet {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?OrderEditDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?OrderEditDraft $body = null, array $headers = []): ByProjectKeyOrdersEditsPost {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}