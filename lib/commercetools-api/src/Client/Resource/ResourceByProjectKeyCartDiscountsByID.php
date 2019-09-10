<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\CartDiscount\CartDiscountUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCartDiscountsByID extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyCartDiscountsByIDGet {
      $args = $this->getArgs();
      return new ByProjectKeyCartDiscountsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?CartDiscountUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?CartDiscountUpdate $body = null, array $headers = []): ByProjectKeyCartDiscountsByIDPost {
      $args = $this->getArgs();
      return new ByProjectKeyCartDiscountsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeyCartDiscountsByIDDelete {
      $args = $this->getArgs();
      return new ByProjectKeyCartDiscountsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}