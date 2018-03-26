<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\State\State;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\State\StateUpdate;


class ByProjectKeyStatesByIDPost extends ApiRequest
{
    const RESULT_TYPE = State::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, StateUpdate $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/states/{ID}');
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return State
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  State
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyStatesByIDPost
     */
    public function withExpand($expand): ByProjectKeyStatesByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
