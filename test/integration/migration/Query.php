<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\Category;

class Query extends MigrationService implements MigrationInterface
{
    public function v1()
    {
        $client = $this->clientV1();

        /** @var Category $category */
        $request = RequestBuilder::of()->categories()->query()->where("id=" . "\"" . $category->getId() . "\"");
        $response = $client->execute($request);
        $result = $request->mapFromResponse($response);

        return $result;
    }

    public function v2()
    {
        $builder = $this->builderV2();
        /** @var Category $category */
        $request = $builder->with()->categories()->get()->withWhere("id=" . "\"" . $category->getId() . "\"");

        return $request->execute();
    }
}
