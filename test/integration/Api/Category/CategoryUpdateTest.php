<?php

namespace Commercetools\IntegrationTest\Api\Category;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryAddAssetActionModel;
use Commercetools\Api\Models\Category\CategoryChangeNameAction;
use Commercetools\Api\Models\Category\CategoryChangeNameActionBuilder;
use Commercetools\Api\Models\Category\CategoryChangeNameActionCollection;
use Commercetools\Api\Models\Category\CategoryChangeNameActionModel;
use Commercetools\Api\Models\Category\CategoryChangeOrderHintActionModel;
use Commercetools\Api\Models\Category\CategoryChangeParentActionModel;
use Commercetools\Api\Models\Category\CategoryChangeSlugActionModel;
use Commercetools\Api\Models\Category\CategoryDraft;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Category\CategoryDraftModel;
use Commercetools\Api\Models\Category\CategoryRemoveAssetActionModel;
use Commercetools\Api\Models\Category\CategorySetDescriptionActionModel;
use Commercetools\Api\Models\Category\CategorySetExternalIdActionModel;
use Commercetools\Api\Models\Category\CategorySetMetaDescriptionActionModel;
use Commercetools\Api\Models\Category\CategorySetMetaKeywordsActionModel;
use Commercetools\Api\Models\Category\CategorySetMetaTitleActionModel;
use Commercetools\Api\Models\Category\CategoryUpdate;
use Commercetools\Api\Models\Category\CategoryUpdateAction;
use Commercetools\Api\Models\Category\CategoryUpdateActionBuilder;
use Commercetools\Api\Models\Category\CategoryUpdateActionCollection;
use Commercetools\Api\Models\Category\CategoryUpdateActionModel;
use Commercetools\Api\Models\Category\CategoryUpdateBuilder;
use Commercetools\Api\Models\Category\CategoryUpdateModel;
use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftBuilder;
use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\AssetSource;
use Commercetools\Api\Models\Common\AssetSourceBuilder;
use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\IntegrationTest\ApiTestCase;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use function Sodium\add;

class CategoryUpdateTest extends ApiTestCase
{

    public function getAssetDraft($assetNameBuilder): AssetDraft
    {
        $assetSource = AssetSourceBuilder::of()
            ->withUri(CategoryFixture::uniqueCategoryString() . '.jpg')->withKey('test');
        $sources = new AssetSourceCollection();
        $sources->add($assetSource->build());
        return AssetDraftBuilder::of()->withName($assetNameBuilder)->withSources($sources)->build();
    }

    protected function getAssetDraftFromKeySourcesAndName($assetKey)
    {
        return AssetDraft::ofKeySourcesAndName(
            $assetKey,
            AssetSourceCollection::of()->add(
                AssetSource::of()->setUri(CategoryFixture::uniqueCategoryString() . '.jpg')->setKey('test')
            ),
            LocalizedString::ofLangAndText('en', CategoryFixture::uniqueCategoryString())
        );
    }

    protected function getAssetDraftFromNameAndSources()
    {
        return AssetDraft::ofNameAndSources(
            LocalizedString::ofLangAndText('en', CategoryFixture::uniqueCategoryString()),
            AssetSourceCollection::of()->add(
                AssetSource::of()->setUri(CategoryFixture::uniqueCategoryString() . '.jpg')->setKey('test')
            )
        );
    }

    public function testChangeName()
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

    public function testChangeNameWithKey()
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

    public function testChangeSlug()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $newSlug = 'new-slug-' . CategoryFixture::uniqueCategoryString();
                $newSlugBuilder = LocalizedStringBuilder::of()->put('en', $newSlug)->build();

                $updateAction = new CategoryChangeSlugActionModel();
                $updateAction->setSlug($newSlugBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($newSlug, $categoryQueryResponse->getSlug()->current());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetDescription()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $description = 'description-' . CategoryFixture::uniqueCategoryString();
                $descriptionBuilder = LocalizedStringBuilder::of()->put('en', $description)->build();
                $draftBuilder->withDescription($descriptionBuilder);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $description = 'new-description-' . CategoryFixture::uniqueCategoryString();
                $descriptionBuilder = LocalizedStringBuilder::of()->put('en', $description)->build();

                $updateAction = new CategorySetDescriptionActionModel();
                $updateAction->setDescription($descriptionBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($description, $categoryQueryResponse->getDescription()->current());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetExternalId()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $externalId = 'externalId-' . CategoryFixture::uniqueCategoryString();
                $draftBuilder->withExternalId($externalId);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $externalId = 'new-external-id-' . CategoryFixture::uniqueCategoryString();

                $updateAction = new CategorySetExternalIdActionModel();
                $updateAction->setExternalId($externalId);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($externalId, $categoryQueryResponse->getExternalId());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetMetaDescription()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $metaDescription = 'meta-description-' . CategoryFixture::uniqueCategoryString();
                $metaDescriptionBuilder = LocalizedStringBuilder::of()->put('en', $metaDescription)->build();
                $draftBuilder->withMetaDescription($metaDescriptionBuilder);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $metaDescription = 'new-description-' . CategoryFixture::uniqueCategoryString();
                $metaDescriptionBuilder = LocalizedStringBuilder::of()->put('en', $metaDescription)->build();

                $updateAction = new CategorySetMetaDescriptionActionModel();
                $updateAction->setMetaDescription($metaDescriptionBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($metaDescription, $categoryQueryResponse->getMetaDescription()->current());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetMetaTitle()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $title = 'title-' . CategoryFixture::uniqueCategoryString();
                $titleBuilder = LocalizedStringBuilder::of()->put('en', $title)->build();
                $draftBuilder->withMetaTitle($titleBuilder);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $title = 'new-title-' . CategoryFixture::uniqueCategoryString();
                $titleBuilder = LocalizedStringBuilder::of()->put('en', $title)->build();

                $updateAction = new CategorySetMetaTitleActionModel();
                $updateAction->setMetaTitle($titleBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($title, $categoryQueryResponse->getMetaTitle()->current());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetMetaKeywords()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $keywords = 'keywords-' . CategoryFixture::uniqueCategoryString();
                $keywordsBuilder = LocalizedStringBuilder::of()->put('en', $keywords)->build();
                $draftBuilder->withMetaTitle($keywordsBuilder);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $keywords = 'new-keywords-' . CategoryFixture::uniqueCategoryString();
                $keywordsBuilder = LocalizedStringBuilder::of()->put('en', $keywords)->build();

                $updateAction = new CategorySetMetaKeywordsActionModel();
                $updateAction->setMetaKeywords($keywordsBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($keywords, $categoryQueryResponse->getMetaKeywords()->current());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }


    public function testAddAsset()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $assetName = 'asset-name-' . CategoryFixture::uniqueCategoryString();
                $assetNameBuilder = LocalizedStringBuilder::of()->put('en', $assetName)->build();

                $assetDraft = $this->getAssetDraft($assetNameBuilder);

                $updateAction = new CategoryAddAssetActionModel();
                $updateAction->setAsset($assetDraft);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertNotNull($categoryQueryResponse->getAssets()->current()->getId());
                $this->assertSame(
                    $assetDraft->getSources()->current()->getUri(),
                    $categoryQueryResponse->getAssets()->current()->getSources()->current()->getUri()
                );

                return $categoryQueryResponse;
            }
        );
    }


    public function testRemoveAsset()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetName = 'asset-name-' . CategoryFixture::uniqueCategoryString();
                $assetNameBuilder = LocalizedStringBuilder::of()->put('en', $assetName)->build();
                $assetDraft = $this->getAssetDraft($assetNameBuilder);
                $assetDraftCollection = new AssetDraftCollection();
                $assetDraftCollection->add($assetDraft);
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {

                $updateAction = new CategoryRemoveAssetActionModel();
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertCount(0, $categoryQueryResponse->getAssets());

                return $categoryQueryResponse;
            }
        );
    }
}


