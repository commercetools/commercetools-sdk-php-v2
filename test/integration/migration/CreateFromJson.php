<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Models\Category\CategoryDraft as CategoryDraftV2;
use Commercetools\Api\Models\Category\CategoryDraftModel;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\CategoryDraft as CategoryDraftV1;

class CreateFromJson extends MigrationService implements MigrationInterface
{
    public function v1()
    {
        $client = $this->clientV1();
        $categoryDraft = CategoryDraftV1::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json"), true));

        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $client->execute($request);
        $result = $request->mapFromResponse($response);

        return $result;
    }

    public function v2()
    {
        $builder = $this->builderV2();
        /** @var CategoryDraftV2 $categoryDraft */
        $categoryDraft = CategoryDraftModel::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json"), true));

        $request = $builder->with()->categories()->post($categoryDraft);

        return $request->execute();
    }
}
