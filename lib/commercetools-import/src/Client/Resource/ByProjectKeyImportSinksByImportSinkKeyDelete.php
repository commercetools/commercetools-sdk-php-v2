<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Commercetools\Base\MapperInterface;
use Commercetools\Base\ResultMapper;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ApiClientException;
use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Errors\ErrorResponse;
use Commercetools\Import\Models\Errors\ErrorResponseModel;
use Commercetools\Import\Models\Importsinks\ImportSink;
use Commercetools\Import\Models\Importsinks\ImportSinkModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyImportSinksByImportSinkKeyDelete extends ApiRequest
{
    /**
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $importSinkKey, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}', '{importSinkKey}'], [$projectKey, $importSinkKey], '{projectKey}/import-sinks/{importSinkKey}');
        parent::__construct($client, 'DELETE', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return ErrorResponse|ImportSink|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        $mapper = new ResultMapper();
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ImportSinkModel::class;

                    break;
                case '404':
                    $resultType = ErrorResponseModel::class;

                    break;
                default:
                    $resultType = JsonObjectModel::class;

                    break;
            }
        }

        return $mapper->mapResponseToClass($resultType, $response);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @return null|ErrorResponse|ImportSink|JsonObject
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch (ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }

        return $this->mapFromResponse($response, $resultType);
    }

}
