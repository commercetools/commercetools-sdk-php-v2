<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\OrderEdit\OrderEditApply;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyOrdersEditsByIDApply extends ApiResource
{
   /**
    * @psalm-param ?OrderEditApply $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?OrderEditApply $body = null, array $headers = []): ByProjectKeyOrdersEditsByIDApplyPost {
      $args = $this->getArgs();
      return new ByProjectKeyOrdersEditsByIDApplyPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
   }
   
}