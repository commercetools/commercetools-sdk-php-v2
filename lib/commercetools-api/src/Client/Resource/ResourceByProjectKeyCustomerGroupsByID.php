<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCustomerGroupsByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCustomerGroupsByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyCustomerGroupsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CustomerGroupUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CustomerGroupUpdate $body = null, array $headers = []): ByProjectKeyCustomerGroupsByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyCustomerGroupsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyCustomerGroupsByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyCustomerGroupsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}