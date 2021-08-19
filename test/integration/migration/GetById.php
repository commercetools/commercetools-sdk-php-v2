<?php


namespace Commercetools\IntegrationTest\migration;


use Commercetools\Api\Models\Category\CategoryBuilder;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\Category;

class GetById extends MigrationService implements MigrationInterface
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function v1()
    {
        $client = $this->clientV1();
        /** @var Category $category */
        $request = RequestBuilder::of()->categories()->getById($category->getId())->expand('parent');
        $response = $this->executeV1($client, $request);
        $result = $request->mapFromResponse($response);

        return $result;
    }

    public function v2()
    {
        $builder = $this->builderV2();
        /** @var CategoryBuilder $category */
        $request = $builder->with()->categories()->withId($category->getId())->get()->withExpand('parent');

        return $request->execute();
    }
}
