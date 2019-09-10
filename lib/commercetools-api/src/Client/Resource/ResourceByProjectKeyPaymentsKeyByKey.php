<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Payment\PaymentUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyPaymentsKeyByKey extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyPaymentsKeyByKeyGet {
      $args = $this->getArgs();
      return new ByProjectKeyPaymentsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?PaymentUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?PaymentUpdate $body = null, array $headers = []): ByProjectKeyPaymentsKeyByKeyPost {
      $args = $this->getArgs();
      return new ByProjectKeyPaymentsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyPaymentsKeyByKeyDelete {
      $args = $this->getArgs();
      return new ByProjectKeyPaymentsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   
}