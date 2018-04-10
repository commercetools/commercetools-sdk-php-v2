<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Channel\Channel;
use Commercetools\Builder\ChannelUpdateBuilder;

use Commercetools\Types\Channel\ChannelDraft;


class ResourceByProjectKeyChannels extends Resource
{
    /**
     * @return ResourceByProjectKeyChannelsByID
     */
    public function withId($ID = null): ResourceByProjectKeyChannelsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyChannelsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyChannelsGet
     */
    public function get(): ByProjectKeyChannelsGet {
        $args = $this->getArgs();
        return new ByProjectKeyChannelsGet($args['projectKey']);
    }
    /**
     * @param ChannelDraft $body
     * @return ByProjectKeyChannelsPost
     */
    public function post(ChannelDraft $body = null): ByProjectKeyChannelsPost {
        $args = $this->getArgs();
        return new ByProjectKeyChannelsPost($args['projectKey'], $body);
    }


    /**
     * @param Channel $channel
     * @return ChannelUpdateBuilder
     */
    public function update(Channel $channel): ChannelUpdateBuilder
    {
        $builder = new ChannelUpdateBuilder(function(ChannelUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($channel);
        if ($channel instanceof MapperAware) {
            $builder->setMapper($channel->getMapper());
        }
        return $builder;
    }

    /**
     * @param Channel $channel
     * @return ByProjectKeyChannelsByIDDelete
     */
    public function delete(Channel $channel): ByProjectKeyChannelsByIDDelete
    {
        return $this->withId($channel->getId())->delete()->withVersion($channel->getVersion());
    }

    /**
     * @param ChannelDraft|callable $channelDraft builder function <code>
     *   function(ChannelDraft $channelDraft): ChannelDraft {
     *     // modify $draft as needed
     *     return $channelDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyChannelsPost
     */
    public function create($channelDraft): ByProjectKeyChannelsPost
    {
        if (is_callable($channelDraft)) {
            $callback = $channelDraft;
            $emptyDraft = $this->mapData(ChannelDraft::class, null);
            $channelDraft = $callback($emptyDraft);
        }
        if (!$channelDraft instanceof ChannelDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($channelDraft);
    }
}
