<?php

namespace Commercetools\IntegrationTest\Api\Category;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Category\CategoryPagedQueryResponse;
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

    public function testOverpaging()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withDraftCategory(
            $builder,
            function (CategoryDraftBuilder $draft) {
                return $draft->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'MyCategory'))->build();
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
            function (CategoryDraftBuilder $draft) {
                return $draft->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'min'))
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
            function (CategoryDraftBuilder $draft) {
                return $draft->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'min'))
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
            function (CategoryDraftBuilder $draft) use ($slug) {
                return $draft->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'max'))
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
            function (CategoryDraftBuilder $draft) {
                return $draft->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'max'))
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
