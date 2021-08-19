<?php


namespace Commercetools\IntegrationTest\migration;


use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Models\Category\CategoryDraft as CategoryDraftV2;
use Commercetools\Client\ClientFactory;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\Category;
use Commercetools\Core\Model\Category\CategoryDraft as CategoryDraftV1;
use Commercetools\Core\Request\AbstractApiRequest;


class CreateFromJson extends MigrationService implements MigrationInterface
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function v1()
    {
        $client = $this->clientV1();
        $categoryDraft = CategoryDraftV1::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json")));

        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $this->executeV1($client, $request);
        $result = $request->mapFromResponse($response);

        return $result;
    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function v2()
    {
        $builder = $this->builderV2();
        /** @var CategoryDraftV2 $categoryDraft */
        $categoryDraft = json_decode(file_get_contents(__DIR__ . "/categoryDraft.json"));

        $request = $builder->with()->categories()->post($categoryDraft);

        return $request->execute();
    }
}
