<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Subscription\SubscriptionUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeySubscriptionsKeyByKey extends ApiResource
{
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeySubscriptionsKeyByKeyGet {
      $args = $this->getArgs();
      return new ByProjectKeySubscriptionsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?SubscriptionUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?SubscriptionUpdate $body = null, array $headers = []): ByProjectKeySubscriptionsKeyByKeyPost {
      $args = $this->getArgs();
      return new ByProjectKeySubscriptionsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function delete($body = null, array $headers = []): ByProjectKeySubscriptionsKeyByKeyDelete {
      $args = $this->getArgs();
      return new ByProjectKeySubscriptionsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
   }
   
}