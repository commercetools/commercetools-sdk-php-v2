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
        $assertName = 'asset-name-' . CategoryFixture::uniqueCategoryString();
        $assertNameBuilder = LocalizedStringBuilder::of()->put('en', $assertName)->build();
        $assetSource = AssetSourceBuilder::of()
            ->withUri(CategoryFixture::uniqueCategoryString() . '.jpg')->withKey('test');
        $sources = new AssetSourceCollection();
        $sources->add($assetSource->build());
        $assetDraftBuilder = AssetDraftBuilder::of()->withName($assertNameBuilder)->withSources($sources);

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
        $assertName = 'asset-name-' . CategoryFixture::uniqueCategoryString();
        $assertNameBuilder = LocalizedStringBuilder::of()->put('en', $assertName)->build();
        $assetSource = AssetSourceBuilder::of()
            ->withUri(CategoryFixture::uniqueCategoryString() . '.jpg')->withKey('test');
        $sources = new AssetSourceCollection();
        $sources->add($assetSource->build());

        $assetDraftBuilder = AssetDraftBuilder::of()->withName($assertNameBuilder)->withSources($sources);
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

    //TODO  testUpdateLocalizedName is missing => handling LocalizedString for locale

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

    public function testChangeParent()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category1) use ($builder) {
                CategoryFixture::withUpdateableCategory(
                    $builder,
                    function (Category $category2) use ($builder, $category1) {
                        $categoryResourceIdentifier = CategoryResourceIdentifierBuilder::of()->withId($category1->getId())->build();

                        $updateAction = new CategoryChangeParentActionModel();
                        $updateAction->setParent($categoryResourceIdentifier);
                        $updateActionCollection = new CategoryUpdateActionCollection();
                        $updateActionCollection->add($updateAction);
                        $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category2->getVersion())
                            ->withActions($updateActionCollection)->build();
                        $request = $builder->with()->categories()->withId($category2->getId())
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
                $assetKeywords = 'keywords-' . CategoryFixture::uniqueCategoryString();
                $assetKeywordsBuilder = LocalizedStringBuilder::of()->put('en', $assetKeywords)->build();
                $draftBuilder->withMetaTitle($assetKeywordsBuilder);

                return $draftBuilder->build();
            },
            function (Category $category) use ($builder) {
                $assetKeywords = 'new-keywords-' . CategoryFixture::uniqueCategoryString();
                $assetKeywordsBuilder = LocalizedStringBuilder::of()->put('en', $assetKeywords)->build();

                $updateAction = new CategorySetMetaKeywordsActionModel();
                $updateAction->setMetaKeywords($assetKeywordsBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($assetKeywords, $categoryQueryResponse->getMetaKeywords()->current());
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
                $assetDraftCollection = $this->getAssetDraftCollection();
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
                $newName = 'new-name-' . CategoryFixture::uniqueCategoryString();
                $newNameBuilder = LocalizedStringBuilder::of()->put('en', $newName)->build();

                $updateAction = new CategoryChangeAssetNameActionModel();
                $updateAction->setName($newNameBuilder);
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $newName,
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
                $newDescription = 'new-description-' . CategoryFixture::uniqueCategoryString();
                $newDescriptionBuilder = LocalizedStringBuilder::of()->put('en', $newDescription)->build();

                $updateAction = new CategorySetAssetDescriptionActionModel();
                $updateAction->setDescription($newDescriptionBuilder);
                $updateAction->setAssetId($category->getAssets()->current()->getId());
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $newDescription,
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
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
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
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
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
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
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
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
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
                $newName = 'new-name-' . CategoryFixture::uniqueCategoryString();
                $newNameBuilder = LocalizedStringBuilder::of()->put('en', $newName)->build();

                $updateAction = new CategoryChangeAssetNameActionModel();
                $updateAction->setAssetKey($category->getAssets()->current()->getKey());
                $updateAction->setName($newNameBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $newName,
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
                $newDescription = 'new-description-' . CategoryFixture::uniqueCategoryString();
                $newDescriptionBuilder = LocalizedStringBuilder::of()->put('en', $newDescription)->build();

                $updateAction = new CategorySetAssetDescriptionActionModel();
                $updateAction->setAssetKey($category->getAssets()->current()->getKey());
                $updateAction->setDescription($newDescriptionBuilder);
                $updateActionCollection = new CategoryUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
                    ->post($categoryUpdate);
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame(
                    $newDescription,
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
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
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
                $categoryUpdate = CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->categories()->withId($category->getId())
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
