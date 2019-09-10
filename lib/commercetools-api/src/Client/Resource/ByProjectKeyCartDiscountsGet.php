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
use Commercetools\Api\Models\CartDiscount\CartDiscountPagedQueryResponse;
use Commercetools\Api\Models\CartDiscount\CartDiscountPagedQueryResponseModel;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyCartDiscountsGet extends ApiRequest
{
    /**
     * @psalm-param scalar $projectKey
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [], Client $client = null)
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/cart-discounts');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return CartDiscountPagedQueryResponse|ErrorResponse|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        $mapper = new ResultMapper();
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case "200": $resultType = CartDiscountPagedQueryResponseModel::class; break;
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
     * @return CartDiscountPagedQueryResponse|ErrorResponse|JsonObject|null
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
   public function withExpand($expand): ByProjectKeyCartDiscountsGet
   {
       return $this->withQueryParam('expand', $expand);
   }
   
   /**
    * 
    * @psalm-param scalar $where
    */
   public function withWhere($where): ByProjectKeyCartDiscountsGet
   {
       return $this->withQueryParam('where', $where);
   }
   
   /**
    * 
    * @psalm-param scalar $sort
    */
   public function withSort($sort): ByProjectKeyCartDiscountsGet
   {
       return $this->withQueryParam('sort', $sort);
   }
   
   /**
    * 
    * @psalm-param scalar $limit
    */
   public function withLimit($limit): ByProjectKeyCartDiscountsGet
   {
       return $this->withQueryParam('limit', $limit);
   }
   
   /**
    * 
    * @psalm-param scalar $offset
    */
   public function withOffset($offset): ByProjectKeyCartDiscountsGet
   {
       return $this->withQueryParam('offset', $offset);
   }
   
   /**
    * 
    * @psalm-param scalar $withTotal
    */
   public function withWithTotal($withTotal): ByProjectKeyCartDiscountsGet
   {
       return $this->withQueryParam('withTotal', $withTotal);
   }
}