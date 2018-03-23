<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Client;

use Commercetools\Base\JsonObject;
use Commercetools\Base\ResultMapper;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7;

class ApiRequest extends Request
{
    const RESULT_TYPE = JsonObject::class;

    private $queryParts;
    private $query;

    /**
     * @inheritDoc
     */
    public function __construct(string $method, string $uri, array $headers = [], $body = null, string $version = '1.1')
    {
        $headers = $this->ensureHeader($headers, 'Content-Type', 'application/json');

        parent::__construct($method, $uri, $headers, $body, $version);
    }

    /**
     * @param array $headers
     * @param string $header
     * @param mixed $defaultValue
     * @return array
     */
    protected function ensureHeader(array $headers, string $header, $defaultValue): array
    {
        $normalizedHeader = strtolower($header);
        foreach ($headers as $headerName => $value) {
            $normalized = strtolower($headerName);
            if ($normalized !== $normalizedHeader) {
                continue;
            }
            return $headers;
        }
        $headers[$header] = $defaultValue;

        return $headers;
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return mixed
     */
    public function map(ResponseInterface $response, ResultMapper $mapper)
    {
        return $mapper->map($this, $response);
    }

    /**
     * @param string $parameterName
     * @param mixed $value
     */
    public function withQueryParam(string $parameterName, $value): ApiRequest
    {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $value;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);

        return $this->withUri($this->getUri()->withQuery($this->query));
    }
}
