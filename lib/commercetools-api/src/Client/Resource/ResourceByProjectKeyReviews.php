<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Review\ReviewDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyReviews extends ApiResource
{
   /**
    * @psalm-param scalar $key
    */
   public function withKey($key = null): ResourceByProjectKeyReviewsKeyByKey {
      $args = $this->getArgs();
      if (!is_null($key)) { $args['key'] = $key; }
      return new ResourceByProjectKeyReviewsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyReviewsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyReviewsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyReviewsGet {
      $args = $this->getArgs();
      return new ByProjectKeyReviewsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?ReviewDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?ReviewDraft $body = null, array $headers = []): ByProjectKeyReviewsPost {
      $args = $this->getArgs();
      return new ByProjectKeyReviewsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}