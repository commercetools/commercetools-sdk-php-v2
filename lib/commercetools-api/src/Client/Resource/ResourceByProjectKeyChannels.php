<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Channel\ChannelDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyChannels extends ApiResource
{
   /**
    * @psalm-param scalar $ID
    */
   public function withId($ID = null): ResourceByProjectKeyChannelsByID {
      $args = $this->getArgs();
      if (!is_null($ID)) { $args['ID'] = $ID; }
      return new ResourceByProjectKeyChannelsByID($this->getUri() . '/{ID}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyChannelsGet {
      $args = $this->getArgs();
      return new ByProjectKeyChannelsGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?ChannelDraft $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?ChannelDraft $body = null, array $headers = []): ByProjectKeyChannelsPost {
      $args = $this->getArgs();
      return new ByProjectKeyChannelsPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}