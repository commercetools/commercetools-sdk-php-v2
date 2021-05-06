<?php


namespace Commercetools\IntegrationTest\Api\Review;

use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewTransitionStateActionBuilder;
use Commercetools\Api\Models\Review\ReviewUpdateActionCollection;
use Commercetools\Api\Models\Review\ReviewUpdateBuilder;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\State\StateDraftBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifierCollection;
use Commercetools\IntegrationTest\Api\State\StateFixture;
use Commercetools\IntegrationTest\ApiTestCase;
use Ramsey\Uuid\Uuid;

class ReviewUpdateTest extends ApiTestCase
{
    public const REVIEW_STATE = 'ReviewState';

    final public static function uniqueString()
    {
        return 'test-' . Uuid::uuid4();
    }

    public function testTransitionState()
    {
        $builder = $this->getApiBuilder();

        StateFixture::withDraftState(
            $builder,
            function (StateDraftBuilder $draftBuilder) {
                $draftBuilder->withType(self::REVIEW_STATE)
                    ->withInitial(true);
                return $draftBuilder->build();
            },
            function (State $state1) use ($builder) {
                StateFixture::withDraftState(
                    $builder,
                    function (StateDraftBuilder $draftBuilder) use ($state1) {
                        $draftBuilder->withType(self::REVIEW_STATE)
                            ->withTransitions(StateResourceIdentifierCollection::fromArray([
                                StateResourceIdentifierBuilder::of()->withKey($state1->getKey())->build()
                            ]));
                        return $draftBuilder->build();
                    },
                    function (State $state2) use ($builder, $state1) {
                        ReviewFixture::withUpdateableReview(
                            $builder,
                            function (Review $review) use ($builder, $state1, $state2) {
                                $stateIdentifier1 = StateResourceIdentifierBuilder::of()->withKey($state1->getKey())->build();
                                $review1Update = ReviewUpdateBuilder::of()
                                    ->withVersion($review->getVersion())
                                    ->withActions(
                                        ReviewUpdateActionCollection::fromArray([
                                            ReviewTransitionStateActionBuilder::of()
                                                ->withState($stateIdentifier1)
                                                ->build()
                                        ])
                                    )->build();
                                $reviewWithState1 = $builder->with()->reviews()->withId($review->getId())->post($review1Update)->execute();

                                $this->assertInstanceOf(Review::class, $reviewWithState1);
                                $this->assertNotSame($review->getVersion(), $reviewWithState1->getVersion());
                                $this->assertSame($review->getId(), $reviewWithState1->getId());

                                $stateIdentifier2 = StateResourceIdentifierBuilder::of()->withKey($state2->getKey())->build();

                                $review2Update = ReviewUpdateBuilder::of()
                                    ->withVersion($reviewWithState1->getVersion())
                                    ->withActions(
                                        ReviewUpdateActionCollection::fromArray([
                                            ReviewTransitionStateActionBuilder::of()
                                                ->withState($stateIdentifier2)
                                                ->build()
                                        ])
                                    )->build();
                                $reviewWithState2 = $builder->with()->reviews()->withId($review->getId())->post($review2Update)->execute();

                                $this->assertInstanceOf(Review::class, $reviewWithState2);
                                $this->assertNotSame($review->getVersion(), $reviewWithState2->getVersion());
                                $this->assertSame($review->getId(), $reviewWithState2->getId());

                                return $reviewWithState2;
                            }
                        );
                    }
                );
            }
        );
    }
}
