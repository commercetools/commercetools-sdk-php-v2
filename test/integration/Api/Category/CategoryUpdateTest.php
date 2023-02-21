<?php

namespace Commercetools\IntegrationTest\Api\Category;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryAddAssetActionModel;
use Commercetools\Api\Models\Category\CategoryChangeAssetNameActionModel;
use Commercetools\Api\Models\Category\CategoryChangeNameActionModel;
use Commercetools\Api\Models\Category\CategoryChangeOrderHintActionModel;
use Commercetools\Api\Models\Category\CategoryChangeParentActionModel;
use Commercetools\Api\Models\Category\CategoryChangeSlugActionModel;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Category\CategoryRemoveAssetActionModel;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\Category\CategorySetAssetDescriptionActionModel;
use Commercetools\Api\Models\Category\CategorySetAssetKeyActionModel;
use Commercetools\Api\Models\Category\CategorySetAssetSourcesActionModel;
use Commercetools\Api\Models\Category\CategorySetAssetTagsActionModel;
use Commercetools\Api\Models\Category\CategorySetDescriptionActionModel;
use Commercetools\Api\Models\Category\CategorySetExternalIdActionModel;
use Commercetools\Api\Models\Category\CategorySetMetaDescriptionActionModel;
use Commercetools\Api\Models\Category\CategorySetMetaKeywordsActionModel;
use Commercetools\Api\Models\Category\CategorySetMetaTitleActionModel;
use Commercetools\Api\Models\Category\CategoryUpdateActionCollection;
use Commercetools\Api\Models\Category\CategoryUpdateBuilder;
use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftBuilder;
use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\AssetSourceBuilder;
use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\IntegrationTest\ApiTestCase;

class CategoryUpdateTest extends ApiTestCase
{
    private function getAssetDraftCollection($assetKey = null): AssetDraftCollection
    {
        $assertName = LocalizedStringBuilder::of()
            ->put('en', 'asset-name-' . CategoryFixture::uniqueCategoryString())
            ->build();
        $assetSource = AssetSourceBuilder::of()
            ->withUri(CategoryFixture::uniqueCategoryString() . '.jpg')
            ->withKey('test');
        $sources = new AssetSourceCollection();
        $sources->add($assetSource->build());
        $assetDraftBuilder = AssetDraftBuilder::of()->withName($assertName)->withSources($sources);

        if ($assetKey !== null) {
            $assetDraftBuilder->withKey($assetKey);
        }
        $assetDraftBuilder = $assetDraftBuilder->build();
        $assetDraftCollection = new AssetDraftCollection();

        try {
            $assetDraftCollection->add($assetDraftBuilder);
        } catch (InvalidArgumentException $e) {
            throw new InvalidArgumentException();
        }

        return $assetDraftCollection;
    }

    private function getAssertDraft($assetKey = null): AssetDraft
    {
        $assertName = LocalizedStringBuilder::of()
            ->put('en', 'asset-name-' . CategoryFixture::uniqueCategoryString())
            ->build();
        $assetSource = AssetSourceBuilder::of()
            ->withUri(CategoryFixture::uniqueCategoryString() . '.jpg')
            ->withKey('test');
        $sources = new AssetSourceCollection();
        $sources->add($assetSource->build());

        $assetDraftBuilder = AssetDraftBuilder::of()->withName($assertName)->withSources($sources);
        if ($assetKey !== null) {
            $assetDraftBuilder->withKey($assetKey);
        }

        return $assetDraftBuilder->build();
    }

    public function testChangeName()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $randomName = 'new name-' . CategoryFixture::uniqueCategoryString();
                $newName = LocalizedStringBuilder::of()->put('en', $randomName)->build();
                $updateAction = new CategoryChangeNameActionModel();
                $updateAction->setName($newName);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();

                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($randomName, $categoryQueryResponse->getName()->current());
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
                $randomName = 'new name-' . CategoryFixture::uniqueCategoryString();
                $newName = LocalizedStringBuilder::of()->put('en', $randomName)->build();

                $updateAction = new CategoryChangeNameActionModel();
                $updateAction->setName($newName);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();

                $request = $builder
                    ->with()
                    ->categories()
                    ->withKey($category->getKey())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($randomName, $categoryQueryResponse->getName()->current());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testUpdateLocalizedName()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $randomName = 'new name-' . CategoryFixture::uniqueCategoryString();
                $newName = LocalizedStringBuilder::of()->put('en', $randomName)->put('en-US', $randomName)->build();

                $updateAction = new CategoryChangeNameActionModel();
                $updateAction->setName($newName);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();

                $request = $builder
                    ->with()
                    ->categories()
                    ->withKey($category->getKey())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertJsonStringEqualsJsonString(
                    '{"en":"' . $randomName . '", "en-US":"' . $randomName . '"}',
                    json_encode($newName)
                );
                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
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
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($hint, $categoryQueryResponse->getOrderHint());
                $this->assertNotSame($category->getVersion(), $categoryQueryResponse->getVersion());

                return $categoryQueryResponse;
            }
        );
    }

    public function testChangeParent()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category1) use ($builder) {
                CategoryFixture::withUpdateableCategory(
                    $builder,
                    function (Category $category2) use ($builder, $category1) {
                        $categoryResourceIdentifier = CategoryResourceIdentifierBuilder::of()
                            ->withId($category1->getId())
                            ->build();

                        $updateAction = new CategoryChangeParentActionModel();
                        $updateAction->setParent($categoryResourceIdentifier);
                        $updateActionCollection = new CategoryUpdateActionCollection();
                        $updateActionCollection->add($updateAction);
                        $categoryUpdate = CategoryUpdateBuilder::of()
                            ->withVersion($category2->getVersion())
                            ->withActions($updateActionCollection)
                            ->build();
                        $request = $builder
                            ->with()
                            ->categories()
                            ->withId($category2->getId())
                            ->post($categoryUpdate);
                        $categoryQueryResponse = $request->execute();

                        $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                        $this->assertSame($category1->getId(), $categoryQueryResponse->getParent()->getId());
                        $this->assertNotSame($category2->getVersion(), $categoryQueryResponse->getVersion());

                        return $categoryQueryResponse;
                    }
                );
            }
        );
    }

    public function testChangeSlug()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $randomSlug = 'new-slug-' . CategoryFixture::uniqueCategoryString();
                $newSlug = LocalizedStringBuilder::of()->put('en', $randomSlug)->build();

                $updateAction = new CategoryChangeSlugActionModel();
                $updateAction->setSlug($newSlug);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($randomSlug, $categoryQueryResponse->getSlug()->current());
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
                $randomDescription = 'description-' . CategoryFixture::uniqueCategoryString();
                $description = LocalizedStringBuilder::of()->put('en', $randomDescription)->build();
                $draftBuilder->withDescription($description);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $randomNewDescription = 'new-description-' . CategoryFixture::uniqueCategoryString();
                $newDescription = LocalizedStringBuilder::of()->put('en', $randomNewDescription)->build();

                $updateAction = new CategorySetDescriptionActionModel();
                $updateAction->setDescription($newDescription);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($randomNewDescription, $categoryQueryResponse->getDescription()->current());
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
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
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
                $randomMetaDescription = 'meta-description-' . CategoryFixture::uniqueCategoryString();
                $metaDescription = LocalizedStringBuilder::of()->put('en', $randomMetaDescription)->build();
                $draftBuilder->withMetaDescription($metaDescription);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $randomNewMetaDescription = 'new-description-' . CategoryFixture::uniqueCategoryString();
                $newMetaDescription = LocalizedStringBuilder::of()->put('en', $randomNewMetaDescription)->build();

                $updateAction = new CategorySetMetaDescriptionActionModel();
                $updateAction->setMetaDescription($newMetaDescription);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($randomNewMetaDescription, $categoryQueryResponse->getMetaDescription()->current());
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
                $randomTitle = 'title-' . CategoryFixture::uniqueCategoryString();
                $title = LocalizedStringBuilder::of()->put('en', $randomTitle)->build();
                $draftBuilder->withMetaTitle($title);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $randomNewTitle = 'new-title-' . CategoryFixture::uniqueCategoryString();
                $newTitle = LocalizedStringBuilder::of()->put('en', $randomNewTitle)->build();

                $updateAction = new CategorySetMetaTitleActionModel();
                $updateAction->setMetaTitle($newTitle);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($randomNewTitle, $categoryQueryResponse->getMetaTitle()->current());
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
                $randomAssetKeywords = 'keywords-' . CategoryFixture::uniqueCategoryString();
                $assetKeywords = LocalizedStringBuilder::of()->put('en', $randomAssetKeywords)->build();
                $draftBuilder->withMetaTitle($assetKeywords);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $randomNewAssetKeywords = 'new-keywords-' . CategoryFixture::uniqueCategoryString();
                $newAssetKeywords = LocalizedStringBuilder::of()->put('en', $randomNewAssetKeywords)->build();

                $updateAction = new CategorySetMetaKeywordsActionModel();
                $updateAction->setMetaKeywords($newAssetKeywords);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($randomNewAssetKeywords, $categoryQueryResponse->getMetaKeywords()->current());
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
                $assetDraft = $this->getAssertDraft();

                $updateAction = new CategoryAddAssetActionModel();
                $updateAction->setAsset($assetDraft);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
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
                $assetDraftCollection = $this->getAssetDraftCollection();
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $updateAction = new CategoryRemoveAssetActionModel();
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertCount(0, $categoryQueryResponse->getAssets());

                return $categoryQueryResponse;
            }
        );
    }

    public function testChangeAssetName()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetDraftCollection = $this->getAssetDraftCollection();
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $randomNewName = 'new-name-' . CategoryFixture::uniqueCategoryString();
                $newName = LocalizedStringBuilder::of()->put('en', $randomNewName)->build();

                $updateAction = new CategoryChangeAssetNameActionModel();
                $updateAction->setName($newName);
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $randomNewName,
                    $categoryQueryResponse->getAssets()->current()->getName()->current()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetAssetDescription()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetDraftCollection = $this->getAssetDraftCollection();
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $randomNewDescription = 'new-description-' . CategoryFixture::uniqueCategoryString();
                $newDescription = LocalizedStringBuilder::of()->put('en', $randomNewDescription)->build();

                $updateAction = new CategorySetAssetDescriptionActionModel();
                $updateAction->setDescription($newDescription);
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $randomNewDescription,
                    $categoryQueryResponse->getAssets()->current()->getDescription()->current()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetAssetTags()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetDraftCollection = $this->getAssetDraftCollection();
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $newTag[] = 'new-tag-' . CategoryFixture::uniqueCategoryString();

                $updateAction = new CategorySetAssetTagsActionModel();
                $updateAction->setTags($newTag);
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $newTag,
                    $categoryQueryResponse->getAssets()->current()->getTags()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetAssetSources()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetDraftCollection = $this->getAssetDraftCollection();
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $uri = CategoryFixture::uniqueCategoryString() . '-new.jpq';
                $newSource = AssetSourceBuilder::of()->withUri($uri)->withKey('test');

                $sources = new AssetSourceCollection();
                $sources->add($newSource->build());
                $updateAction = new CategorySetAssetSourcesActionModel();
                $updateAction->setSources($sources);
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $newSource->getUri(),
                    $categoryQueryResponse->getAssets()->current()->getSources()->current()->getUri()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetAssetKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetDraftCollection = $this->getAssetDraftCollection();
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $assetKey = uniqid();

                $updateAction = new CategorySetAssetKeyActionModel();
                $updateAction->setAssetKey($assetKey);
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $assetKey,
                    $categoryQueryResponse->getAssets()->current()->getKey()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testAddAssetWithKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableCategory(
            $builder,
            function (Category $category) use ($builder) {
                $assetKey = uniqid();
                $assetDraft = $this->getAssertDraft($assetKey);

                $updateAction = new CategoryAddAssetActionModel();
                $updateAction->setAsset($assetDraft);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertNotNull($categoryQueryResponse->getAssets()->current()->getId());
                $this->assertSame($assetKey, $categoryQueryResponse->getAssets()->current()->getKey());
                $this->assertSame(
                    $assetDraft->getSources()->current()->getUri(),
                    $categoryQueryResponse->getAssets()->current()->getSources()->current()->getUri()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testRemoveAssetByKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetKey = uniqid();
                $assetDraftCollection = $this->getAssetDraftCollection($assetKey);
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $updateAction = new CategoryRemoveAssetActionModel();
                $updateAction->setAssetKey($category->getAssets()->current()->getKey());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertCount(0, $categoryQueryResponse->getAssets());

                return $categoryQueryResponse;
            }
        );
    }

    public function testChangeAssetNameByKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetKey = uniqid();
                $assetDraftCollection = $this->getAssetDraftCollection($assetKey);
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $randomNewName = 'new-name-' . CategoryFixture::uniqueCategoryString();
                $newName = LocalizedStringBuilder::of()->put('en', $randomNewName)->build();

                $updateAction = new CategoryChangeAssetNameActionModel();
                $updateAction->setAssetKey($category->getAssets()->current()->getKey());
                $updateAction->setName($newName);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $randomNewName,
                    $categoryQueryResponse->getAssets()->current()->getName()->current()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetAssetDescriptionByKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetKey = uniqid();
                $assetDraftCollection = $this->getAssetDraftCollection($assetKey);
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $randomNewDescription = 'new-description-' . CategoryFixture::uniqueCategoryString();
                $newDescription = LocalizedStringBuilder::of()->put('en', $randomNewDescription)->build();

                $updateAction = new CategorySetAssetDescriptionActionModel();
                $updateAction->setAssetKey($category->getAssets()->current()->getKey());
                $updateAction->setDescription($newDescription);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $randomNewDescription,
                    $categoryQueryResponse->getAssets()->current()->getDescription()->current()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetAssetTagsByKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetKey = uniqid();
                $assetDraftCollection = $this->getAssetDraftCollection($assetKey);
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $newTag[] = 'new-tag-' . CategoryFixture::uniqueCategoryString();

                $updateAction = new CategorySetAssetTagsActionModel();
                $updateAction->setAssetKey($category->getAssets()->current()->getKey());
                $updateAction->setTags($newTag);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $newTag,
                    $categoryQueryResponse->getAssets()->current()->getTags()
                );

                return $categoryQueryResponse;
            }
        );
    }

    public function testSetAssetSourcesByKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withUpdateableDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                $assetKey = uniqid();
                $assetDraftCollection = $this->getAssetDraftCollection($assetKey);
                $draftBuilder->withAssets($assetDraftCollection);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $assetSource = AssetSourceBuilder::of()
                    ->withUri(CategoryFixture::uniqueCategoryString() . '.jpg')->withKey('test');
                $newSource = new AssetSourceCollection();
                $newSource->add($assetSource->build());

                $updateAction = new CategorySetAssetSourcesActionModel();
                $updateAction->setAssetKey($category->getAssets()->current()->getKey());
                $updateAction->setSources($newSource);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()
                    ->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->categories()
                    ->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertStringContainsString(
                    $assetSource->getUri(),
                    $categoryQueryResponse->getAssets()->current()->getSources()->current()->getUri()
                );

                return $categoryQueryResponse;
            }
        );
    }
}
