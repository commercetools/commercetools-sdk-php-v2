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
use Commercetools\Types\Channel\ChannelUpdate;


class ByProjectKeyChannelsByIDPost extends ApiRequest
{
    const RESULT_TYPE = Channel::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, ChannelUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s/channels/%s', $projectKey, $ID);
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
     * @return ByProjectKeyChannelsByIDPost
     */
    public function withExpand($expand): ByProjectKeyChannelsByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
