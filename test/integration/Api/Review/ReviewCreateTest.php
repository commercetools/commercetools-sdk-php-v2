<?php


namespace Commercetools\IntegrationTest\Api\Review;


use Commercetools\Api\Models\Review\Review;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\ApiTestCase;

class ReviewCreateTest extends ApiTestCase
{

    const REVIEW_STATE = 'ReviewState';

    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        ReviewFixture::withReview(
            $builder,
            function (Review $review) use ($builder) {
                $request = $builder->with()->reviews()->withId($review->getId())->get();
                $reviewQueryResponse = $request->execute();

                $this->assertSame($review->getTitle(), $reviewQueryResponse->getTitle());
                $this->assertSame($review->getKey(), $reviewQueryResponse->getKey());
                $this->assertNotEmpty($reviewQueryResponse->getId());
                $this->assertSame(1, $reviewQueryResponse->getVersion());
            }
        );
    }

    public function testDeleteById() {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        ReviewFixture::withReview(
            $builder,
            function (Review $review) use ($builder) {
                $request = $builder->with()->reviews()->withId($review->getId())->delete()->withVersion($review->getVersion());
                $reviewQueryResponse = $request->execute();

                $this->assertSame($review->getId(), $reviewQueryResponse->getId());
                $this->assertInstanceOf(Review::class, $reviewQueryResponse);

                $request = $builder->with()->reviews()->withId($review->getId())->get();
                $request->execute();
            }
        );
    }

    public function testDeleteByKey() {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        ReviewFixture::withReview(
            $builder,
            function (Review $review) use ($builder) {
                $request = $builder->with()->reviews()->withKey($review->getKey())->delete()->withVersion($review->getVersion());
                $reviewQueryResponse = $request->execute();

                $this->assertSame($review->getKey(), $reviewQueryResponse->getKey());
                $this->assertInstanceOf(Review::class, $reviewQueryResponse);

                $request = $builder->with()->reviews()->withKey($review->getKey())->get();
                $request->execute();
            }
        );
    }


}
