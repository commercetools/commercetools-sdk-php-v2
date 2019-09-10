<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCustomerGroups extends ApiResource
{
   /**
    * @psalm-param scalar $key
    */
   public function withKey($key = null): ResourceByProjectKeyCustomerGroupsKeyByKey {
      $args = $this->getArgs();
      if (!is_null($key)) { $args['key'] = $key; }
      return new ResourceByProjectKeyCustomerGroupsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyCustomerGroupsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyCustomerGroupsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCustomerGroupsGet {
      $args = $this->getArgs();
      return new ByProjectKeyCustomerGroupsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CustomerGroupDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CustomerGroupDraft $body = null, array $headers = []): ByProjectKeyCustomerGroupsPost {
      $args = $this->getArgs();
      return new ByProjectKeyCustomerGroupsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}