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
class ResourceByProjectKeyPaymentsByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyPaymentsByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyPaymentsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?PaymentUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?PaymentUpdate $body = null, array $headers = []): ByProjectKeyPaymentsByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyPaymentsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyPaymentsByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyPaymentsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}