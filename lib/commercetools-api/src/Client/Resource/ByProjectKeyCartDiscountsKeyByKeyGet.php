<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Commercetools\Base\MapperInterface;
use Commercetools\Base\ResultMapper;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ApiClientException;
use Commercetools\Client\ApiRequest;
use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountModel;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyCartDiscountsKeyByKeyGet extends ApiRequest
{
    /**
     * @psalm-param scalar $projectKey
     * @psalm-param scalar $key
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [], Client $client = null)
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/cart-discounts/key={key}');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return CartDiscount|ErrorResponse|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        $mapper = new ResultMapper();
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case "200": $resultType = CartDiscountModel::class; break;
                case "400": $resultType = ErrorResponseModel::class; break;
                case "401": $resultType = ErrorResponseModel::class; break;
                case "403": $resultType = ErrorResponseModel::class; break;
                case "500": $resultType = ErrorResponseModel::class; break;
                case "503": $resultType = ErrorResponseModel::class; break;
                default:
                    $resultType = JsonObjectModel::class; break;
            }
        }
        return $mapper->mapResponseToClass($resultType, $response);
    }
    
    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @param array $options
     * @return CartDiscount|ErrorResponse|JsonObject|null
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
           $response = $this->send($options);
        } catch(ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());
            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch(ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());
            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }
        return $this->mapFromResponse($response, $resultType);
    }

   /**
    * 
    * @psalm-param scalar $expand
    */
   public function withExpand($expand): ByProjectKeyCartDiscountsKeyByKeyGet
   {
       return $this->withQueryParam('expand', $expand);
   }
}