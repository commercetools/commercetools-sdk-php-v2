<?php


namespace Commercetools\IntegrationTest\Api\CustomObject;


use Commercetools\Api\Models\CustomObject\CustomObjectDraftBuilder;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ExceptionFactory;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\IntegrationTest\ApiTestCase;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use Ramsey\Uuid\Uuid;

class CustomObjectCreateTest extends ApiTestCase
{

    public function testCustomObjectHandle200And201()
    {
        $uniqueString = 'test-' . Uuid::uuid4();
        $builder = $this->getApiBuilder();

        $customObjectDraft = CustomObjectDraftBuilder::of()->withContainer("test_" . $uniqueString)
            ->withKey("key_" . $uniqueString)->withValue("value_" . $uniqueString)->build();

        $request = $builder->customObjects()->post($customObjectDraft);
        try {
            $response = $request->send();
        } catch (BadResponseException $e) {
            throw $e;
        }
        $resultCreate = $request->mapFromResponse($response);

        $this->assertSame($response->getStatusCode(), 201);

        $customObjectDraftToUpdate = CustomObjectDraftBuilder::of()->withContainer($customObjectDraft->getContainer())
            ->withKey($customObjectDraft->getKey())->withValue("new Value" . $uniqueString)->build();

        $request = $builder->customObjects()->post($customObjectDraftToUpdate);
        try {
            $response = $request->send();
        } catch (BadResponseException $e) {
            throw $e;
        }
        $resultUpdate = $request->mapFromResponse($response);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertNotSame($resultCreate->getVersion(), $resultUpdate->getVersion());
    }
}
