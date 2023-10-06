<?php


namespace Commercetools\IntegrationTest\Api\Review;

use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewDraftBuilder;
use Commercetools\Api\Models\Review\ReviewTransitionStateActionBuilder;
use Commercetools\Api\Models\Review\ReviewUpdateActionCollection;
use Commercetools\Api\Models\Review\ReviewUpdateBuilder;
use Commercetools\Api\Models\Review\ReviewUpdateModel;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\State\StateDraftBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifierCollection;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\Api\State\StateFixture;
use Commercetools\IntegrationTest\ApiTestCase;

class ReviewCreateTest extends ApiTestCase
{
    public const REVIEW_STATE = 'ReviewState';

    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        ReviewFixture::withReview(
            $builder,
            function (Review $review) use ($builder) {
                $request = $builder
                    ->with()
                    ->reviews()
                    ->withId($review->getId())
                    ->get();
                $reviewQueryResponse = $request->execute();

                $this->assertSame($review->getTitle(), $reviewQueryResponse->getTitle());
                $this->assertSame($review->getKey(), $reviewQueryResponse->getKey());
                $this->assertNotEmpty($reviewQueryResponse->getId());
                $this->assertSame(1, $reviewQueryResponse->getVersion());
            }
        );
    }

    public function testDeleteById()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        ReviewFixture::withReview(
            $builder,
            function (Review $review) use ($builder) {
                $request = $builder
                    ->with()
                    ->reviews()
                    ->withId($review->getId())
                    ->delete()
                    ->withVersion($review->getVersion());
                $reviewQueryResponse = $request->execute();

                $this->assertSame($review->getId(), $reviewQueryResponse->getId());
                $this->assertInstanceOf(Review::class, $reviewQueryResponse);

                $request = $builder->with()->reviews()->withId($review->getId())->get();
                $request->execute();
            }
        );
    }

    public function testDeleteByKey()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        ReviewFixture::withReview(
            $builder,
            function (Review $review) use ($builder) {
                $request = $builder
                    ->with()
                    ->reviews()
                    ->withKey($review->getKey())
                    ->delete()
                    ->withVersion($review->getVersion());
                $reviewQueryResponse = $request->execute();

                $this->assertSame($review->getKey(), $reviewQueryResponse->getKey());
                $this->assertInstanceOf(Review::class, $reviewQueryResponse);

                $request = $builder->with()->reviews()->withKey($review->getKey())->get();
                $request->execute();
            }
        );
    }

    public function testIncludedInStatistics()
    {
        $builder = $this->getApiBuilder();

        $review = $builder->reviews()
            ->post(
                ReviewDraftBuilder::of()
                    ->withTitle("test")
                    ->withRating(4)
                    ->build())
            ->execute();
        $this->assertTrue($review->getIncludedInStatistics());

        $builder->reviews()->withId($review->getId())->delete()->withVersion($review->getVersion())->execute();
    }

    public function testIncludedInStatisticsWithState()
    {
        $builder = $this->getApiBuilder();
        StateFixture::withDraftState($builder,
            function (StateDraftBuilder $draftBuilder) {
                return $draftBuilder
                    ->withType("ReviewState")
                    ->withRoles(["ReviewIncludedInStatistics"])->build();
            },
            function (State $state) use ($builder) {
                $review = $builder->reviews()
                    ->post(
                        ReviewDraftBuilder::of()
                            ->withTitle("test")
                            ->withRating(4)
                            ->withState(StateResourceIdentifierBuilder::of()->withId($state->getId())->build())
                            ->build())
                    ->execute();
                $this->assertTrue($review->getIncludedInStatistics());

                $builder->reviews()->withId($review->getId())->delete()->withVersion($review->getVersion())->execute();
            }
        );
    }

    public function testIncludedInStatisticsWithTransition()
    {
        $builder = $this->getApiBuilder();
        StateFixture::withDraftState($builder, function (StateDraftBuilder $draftBuilder) {
            return $draftBuilder
                ->withType("ReviewState")
                ->withRoles(["ReviewIncludedInStatistics"])
                ->build();
        }, function (State $state2) use ($builder) {
            StateFixture::withDraftState($builder,
                function (StateDraftBuilder $draftBuilder) use ($state2){
                    return $draftBuilder
                        ->withTransitions(StateResourceIdentifierCollection::of()
                            ->add(StateResourceIdentifierBuilder::of()->withId($state2->getId())->build())
                        )
                        ->withType("ReviewState")
                        ->build();
                },
                function (State $state1) use ($builder, $state2) {
                    $review = $builder->reviews()
                        ->post(
                            ReviewDraftBuilder::of()
                                ->withTitle("test")
                                ->withRating(4)
                                ->withState(StateResourceIdentifierBuilder::of()->withId($state1->getId())->build())
                                ->build())
                        ->execute();
                    $this->assertFalse($review->getIncludedInStatistics());

                    $updatedReview = $builder->reviews()
                        ->withId($review->getId())
                        ->post(ReviewUpdateBuilder::of()
                            ->withVersion($review->getVersion())
                            ->withActions(ReviewUpdateActionCollection::of()
                                ->add(ReviewTransitionStateActionBuilder::of()
                                    ->withState(StateResourceIdentifierBuilder::of()->withId($state2->getId())->build())
                                    ->build()
                                )
                            )
                            ->build()
                        )->execute();
                    $this->assertTrue($updatedReview->getIncludedInStatistics());

                    $builder->reviews()->withId($updatedReview->getId())->delete()->withVersion($updatedReview->getVersion())->execute();
                }
            );
        });

    }
}
