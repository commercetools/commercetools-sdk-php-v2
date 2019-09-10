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
class ResourceByProjectKeyMePassword extends ApiResource
{
   /**
    */
   public function reset(): ResourceByProjectKeyMePasswordReset {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyMePasswordReset($this->getUri() . '/reset', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post($body = null, array $headers = []): ByProjectKeyMePasswordPost {
      $args = $this->getArgs();
      return new ByProjectKeyMePasswordPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}