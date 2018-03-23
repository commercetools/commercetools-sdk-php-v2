<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Project\Project;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Project\ProjectUpdate;


class ByProjectKeyPost extends ApiRequest
{
    const RESULT_TYPE = Project::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, ProjectUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Project
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Project
    {
        return parent::map($response, $mapper);
    }

}
