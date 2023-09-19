<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByID
 */
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertSame($relativeUri, (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        } else {
            $this->assertSame("", (string) $request->getBody());
        }
    }



    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response($statusCode, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteClientException(callable $builderFunction)
    {
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ClientException("Oops!", $request, new Response(400)));

        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request, new Response(500)));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->approvalRules()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/approval-rules/test_ID?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->approvalRules()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/approval-rules/test_ID',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->approvalRules()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/approval-rules/test_ID?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->approvalRules()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/approval-rules/test_ID',
            ]
        ];
    }

    public function getResources()
    {
        return [
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->approvalRules()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
