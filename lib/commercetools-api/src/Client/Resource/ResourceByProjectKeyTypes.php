<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Type\TypeDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyTypes extends ApiResource
{
   /**
    * @psalm-param scalar $key
    */
   public function withKey($key = null): ResourceByProjectKeyTypesKeyByKey {
      $args = $this->getArgs();
      if (!is_null($key)) { $args['key'] = $key; }
      return new ResourceByProjectKeyTypesKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyTypesByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyTypesByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyTypesGet {
      $args = $this->getArgs();
      return new ByProjectKeyTypesGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?TypeDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?TypeDraft $body = null, array $headers = []): ByProjectKeyTypesPost {
      $args = $this->getArgs();
      return new ByProjectKeyTypesPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}