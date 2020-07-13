<?php

namespace Commercetools\IntegrationTest\Api\Category;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Category\CategoryPagedQueryResponse;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Exception\BadRequestException;
use Commercetools\IntegrationTest\ApiTestCase;

class CategoryQueryTest extends ApiTestCase
{
    public function testQuery()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->get();
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(CategoryPagedQueryResponse::class, $categoryQueryResponse);
                $this->assertCount(1, $categoryQueryResponse->getResults());
                $this->assertSame($category->getId(), $categoryQueryResponse->getResults()->current()->getId());
            }
        );
    }

    public function testGetById()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withId($category->getId())->get();
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($category->getId(), $categoryQueryResponse->getId());
            }
        );
    }

    public function testGetByKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withKey($category->getKey())->get();
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($category->getId(), $categoryQueryResponse->getId());
            }
        );
    }

    public function testAncestorExpansion()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $level1) use ($builder) {
                CategoryFixture::withDraftCategory(
                    $builder,
                    function (CategoryDraftBuilder $level2Builder) use ($level1) {
                        $categoryResourceIdentifierBuilder = CategoryResourceIdentifierBuilder::of()->withId($level1->getId());
                        $level2Builder->withParentBuilder($categoryResourceIdentifierBuilder);

                        return $level2Builder->build();
                    },
                    function (Category $level2) use ($builder, $level1) {
                        CategoryFixture::withDraftCategory(
                            $builder,
                            function (CategoryDraftBuilder $level3Builder) use ($level2) {
                                $categoryResourceIdentifierBuilder = CategoryResourceIdentifierBuilder::of()->withId($level2->getId());
                                $level3Builder->withParentBuilder($categoryResourceIdentifierBuilder);

                                return $level3Builder->build();
                            },
                            function (Category $level3) use ($builder, $level2, $level1) {
                                CategoryFixture::withDraftCategory(
                                    $builder,
                                    function (CategoryDraftBuilder $level4Builder) use ($level3) {
                                        $categoryResourceIdentifierBuilder = CategoryResourceIdentifierBuilder::of()->withId($level3->getId());
                                        $level4Builder->withParentBuilder($categoryResourceIdentifierBuilder);

                                        return $level4Builder->build();
                                    },
                                    function (Category $level4) use ($builder, $level3, $level2, $level1) {
                                        $request = $builder->with()->categories()->withId($level4->getId())->get()
                                            ->withExpand('ancestors[*].ancestors[*]');
                                        $categoryQueryResponse = $request->execute();

                                        $this->assertCount(3, $categoryQueryResponse->getAncestors());

                                        $ancestorIds = $this->map(
                                            function ($value) {
                                                return $value->getObj()->getId();
                                            },
                                            $categoryQueryResponse->getAncestors()
                                        );

                                        $expectedAncestors = [$level1->getId(), $level2->getId(), $level3->getId()];

                                        $this->assertSame($expectedAncestors, $ancestorIds);

                                        $level3ExpandedAncestor = $categoryQueryResponse->getAncestors()->at(2)->getObj();

                                        $this->assertSame($level3->getId(), $level3ExpandedAncestor->getId());
                                        $this->assertSame(
                                            $level1->getId(),
                                            $level3ExpandedAncestor->getAncestors()->current()->getObj()->getId()
                                        );
                                    }
                                );
                            }
                        );
                    }
                );
            }
        );
    }

    public function testParentExpansion()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $level1) use ($builder) {
                CategoryFixture::withDraftCategory(
                    $builder,
                    function (CategoryDraftBuilder $level2Builder) use ($level1) {
                        $categoryResourceIdentifierBuilder = CategoryResourceIdentifierBuilder::of()->withId($level1->getId());
                        $level2Builder->withParentBuilder($categoryResourceIdentifierBuilder);

                        return $level2Builder->build();
                    },
                    function (Category $level2) use ($level1, $builder) {
                        $request = $builder->with()->categories()->withId($level2->getId())->get()
                            ->withExpand('parent');
                        $categoryQueryResponse = $request->execute();

                        $this->assertSame($level1->getId(), $categoryQueryResponse->getParent()->getObj()->getId());
                    }
                );
            }
        );
    }

    public function testOverpaging()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                return $draftBuilder->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'MyCategory'))->build();
            },
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->get()->withOffset(10000);
                $categoryQueryResponse = $request->execute();

                $this->assertSame(10000, $categoryQueryResponse->getOffset());
                $this->assertSame(0, $categoryQueryResponse->getCount());
                $this->assertCount(0, $categoryQueryResponse->getResults());
            }
        );
    }

    public function testMinSlug()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                return $draftBuilder->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'min'))
                    ->withSlugBuilder(LocalizedStringBuilder::of()->put('en', '12'))
                    ->build();
            },
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withId($category->getId())->get();
                $categoryQueryResponse = $request->execute();

                $this->assertSame('min', $categoryQueryResponse->getName()->current());
                $this->assertSame('12', $categoryQueryResponse->getSlug()->current());
            }
        );
    }

    public function testMinSlugFail()
    {
        $this->expectException(BadRequestException::class);
        $this->expectExceptionCode(400);

        $builder = $this->getApiBuilder();

        CategoryFixture::withDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                return $draftBuilder->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'min'))
                    ->withSlugBuilder(LocalizedStringBuilder::of()->put('en', '1'))
                    ->build();
            },
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withId($category->getId())->get();
                $request->execute();
            }
        );
    }

    public function testMaxSlug()
    {
        $builder = $this->getApiBuilder();

        $slug = str_pad('1', 256, '0');

        CategoryFixture::withDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) use ($slug) {
                return $draftBuilder->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'max'))
                    ->withSlugBuilder(LocalizedStringBuilder::of()->put('en', $slug))
                    ->build();
            },
            function (Category $category) use ($builder, $slug) {
                $request = $builder->with()->categories()->withId($category->getId())->get();
                $categoryQueryResponse = $request->execute();

                $this->assertSame('max', $categoryQueryResponse->getName()->current());
                $this->assertSame($slug, $categoryQueryResponse->getSlug()->current());
            }
        );
    }

    public function testMaxSlugFail()
    {
        $this->expectException(BadRequestException::class);
        $this->expectExceptionCode(400);

        $builder = $this->getApiBuilder();

        CategoryFixture::withDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draftBuilder) {
                return $draftBuilder->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'max'))
                    ->withSlugBuilder(LocalizedStringBuilder::of()->put('en', str_pad('1', 257, '0')))
                    ->build();
            },
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withId($category->getId())->get();
                $request->execute();
            }
        );
    }
}
