<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Subscription\SubscriptionDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeySubscriptions extends ApiResource
{
   /**
    * @psalm-param scalar $key
    */
   public function withKey($key = null): ResourceByProjectKeySubscriptionsKeyByKey {
      $args = $this->getArgs();
      if (!is_null($key)) { $args['key'] = $key; }
      return new ResourceByProjectKeySubscriptionsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeySubscriptionsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeySubscriptionsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeySubscriptionsGet {
      $args = $this->getArgs();
      return new ByProjectKeySubscriptionsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?SubscriptionDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?SubscriptionDraft $body = null, array $headers = []): ByProjectKeySubscriptionsPost {
      $args = $this->getArgs();
      return new ByProjectKeySubscriptionsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}