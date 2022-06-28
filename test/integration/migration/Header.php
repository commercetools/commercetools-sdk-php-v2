<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\CategoryDraft;

class Header extends MigrationService implements MigrationInterface
{
    public function v1()
    {
        $client = $this->clientV1();
        /** @var CategoryDraft $categoryDraft */
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $client->execute($request)->withHeader('foo', 'bar');

        return $request->mapFromResponse($response);
    }

    public function v2()
    {
        $builder = $this->builderV2();
        $request = $builder->with()->categories()->get();

        return $request->withHeader("foo", "bar");
    }
}
