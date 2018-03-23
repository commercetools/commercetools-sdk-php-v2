<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Channel\Channel;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Channel\ChannelDraft;


class ByProjectKeyChannelsPost extends ApiRequest
{
    const RESULT_TYPE = Channel::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, ChannelDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/channels', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Channel
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Channel
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyChannelsPost
     */
    public function withExpand($expand): ByProjectKeyChannelsPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
