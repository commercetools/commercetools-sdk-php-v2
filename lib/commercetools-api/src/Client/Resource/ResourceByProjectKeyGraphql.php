<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyGraphql extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post($body = null, array $headers = []): ByProjectKeyGraphqlPost {
      $args = $this->getArgs();
      return new ByProjectKeyGraphqlPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}