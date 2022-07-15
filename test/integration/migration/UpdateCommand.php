<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Models\Category\Category as CategoryV2;
use Commercetools\Api\Models\Category\CategoryChangeNameActionBuilder;
use Commercetools\Api\Models\Category\CategoryChangeNameActionModel;
use Commercetools\Api\Models\Category\CategoryUpdateActionCollection;
use Commercetools\Api\Models\Category\CategoryUpdateBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\Category as CategoryV1;
use Commercetools\Core\Model\Common\LocalizedString;
use Commercetools\Core\Request\Categories\Command\CategoryChangeNameAction as CategoryChangeNameActionV1;

class UpdateCommand extends MigrationService implements MigrationInterface
{
    public function v1()
    {
        $client = $this->clientV1();

        $newName = LocalizedString::ofLangAndText('en', 'new-name');
        /** @var CategoryV1 $category */
        $request = RequestBuilder::of()->categories()->update($category)
                    ->addAction(CategoryChangeNameActionV1::ofName($newName));
        $response = $client->execute($request);
        return $request->mapFromResponse($response);
    }

    public function v2()
    {
        $builder = $this->builderV2();

        $newName = LocalizedStringBuilder::of()->put('en', "new-name")->build();
        /** @var CategoryV2 $category */
        $request = $builder->with()->categories()->withId($category->getId())
            ->post(
                CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions(
                        CategoryUpdateActionCollection::of()->add(CategoryChangeNameActionBuilder::of()->withName($newName)->build())
                    )->build()
            );

        return $request->execute();
    }
}
