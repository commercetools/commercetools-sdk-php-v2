<?php

namespace Commercetools\IntegrationTest\Api\Category;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryChangeNameAction;
use Commercetools\Api\Models\Category\CategoryChangeNameActionBuilder;
use Commercetools\Api\Models\Category\CategoryChangeNameActionCollection;
use Commercetools\Api\Models\Category\CategoryChangeNameActionModel;
use Commercetools\Api\Models\Category\CategoryChangeOrderHintActionModel;
use Commercetools\Api\Models\Category\CategoryChangeParentActionModel;
use Commercetools\Api\Models\Category\CategoryDraft;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Category\CategoryUpdate;
use Commercetools\Api\Models\Category\CategoryUpdateAction;
use Commercetools\Api\Models\Category\CategoryUpdateActionBuilder;
use Commercetools\Api\Models\Category\CategoryUpdateActionCollection;
use Commercetools\Api\Models\Category\CategoryUpdateActionModel;
use Commercetools\Api\Models\Category\CategoryUpdateBuilder;
use Commercetools\Api\Models\Category\CategoryUpdateModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\IntegrationTest\ApiTestCase;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use function Sodium\add;

class CategoryUpdateTest extends ApiTestCase
{
    public function testUpdateName()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $newName = 'new name-' . CategoryFixture::uniqueCategoryString();
                $newNameBuilder = LocalizedStringBuilder::of()->put('en', $newName)->build();

                $updateAction = new CategoryChangeNameActionModel();
                $updateAction->setName($newNameBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();

                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($newName, $categoryQueryResponse->getName()->current());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testUpdateNameWithKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $newName = 'new name-' . CategoryFixture::uniqueCategoryString();
                $newNameBuilder = LocalizedStringBuilder::of()->put('en', $newName)->build();

                $updateAction = new CategoryChangeNameActionModel();
                $updateAction->setName($newNameBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();

                $request = $builder->with()->categories()->withKey($category->getKey())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($newName, $categoryQueryResponse->getName()->current());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testChangeOrderHint()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $hint = '0.9' . trim(mt_rand(1, CategoryFixture::RAND_MAX));

                $updateAction = new CategoryChangeOrderHintActionModel();
                $updateAction->setOrderHint($hint);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($hint, $categoryQueryResponse->getOrderHint());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }
}


