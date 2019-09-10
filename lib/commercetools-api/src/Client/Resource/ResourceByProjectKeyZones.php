<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Zone\ZoneDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyZones extends ApiResource
{
   /**
    * @psalm-param scalar $key
    */
   public function withKey($key = null): ResourceByProjectKeyZonesKeyByKey {
      $args = $this->getArgs();
      if (!is_null($key)) { $args['key'] = $key; }
      return new ResourceByProjectKeyZonesKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyZonesByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyZonesByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyZonesGet {
      $args = $this->getArgs();
      return new ByProjectKeyZonesGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?ZoneDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?ZoneDraft $body = null, array $headers = []): ByProjectKeyZonesPost {
      $args = $this->getArgs();
      return new ByProjectKeyZonesPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}