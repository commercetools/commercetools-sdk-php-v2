<?php


namespace Commercetools\IntegrationTest\Api\Review;


use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewTransitionStateActionBuilder;
use Commercetools\Api\Models\Review\ReviewTransitionStateActionCollection;
use Commercetools\Api\Models\Review\ReviewTransitionStateActionModel;
use Commercetools\Api\Models\Review\ReviewUpdateActionCollection;
use Commercetools\Api\Models\Review\ReviewUpdateBuilder;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\State\StateDraft;
use Commercetools\Api\Models\State\StateDraftBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifierCollection;
use Commercetools\IntegrationTest\ApiTestCase;
use Ramsey\Uuid\Uuid;

class ReviewUpdateTest  extends ApiTestCase
{
    const REVIEW_STATE = 'ReviewState';

    final public static function uniqueString()
    {
        return 'test-' . Uuid::uuid4();
    }

    public function testTransitionState() {
        $builder = $this->getApiBuilder();

        $stateDraftBuilder1 = new StateDraftBuilder();

        $stateDraft1 = $stateDraftBuilder1->withKey('test-' . $this->uniqueString() . '-key')
            ->withType(self::REVIEW_STATE)->withInitial(true)->build();
        $request1 = $builder->with()->states()->post($stateDraft1);

        $state1 = $request1->execute();

        $stateDraftBuilder2 = new StateDraftBuilder();
        $state1ResourceIdentifier = StateResourceIdentifierBuilder::of()->withId($state1->getId())->build();
        $state1ResourceIdentifierCollection = new StateResourceIdentifierCollection();
        $state1ResourceIdentifierCollection->add($state1ResourceIdentifier);
        $stateDraft2 = $stateDraftBuilder2->withKey('test-' . $this->uniqueString() . '-key')
            ->withType(self::REVIEW_STATE)->withTransitions($state1ResourceIdentifierCollection)->build();
        $request2 = $builder->with()->states()->post($stateDraft2);

        $state2 = $request2->execute();

        ReviewFixture::withUpdateableReview(
            $builder,
            function (Review $review) use ($builder, $state1, $state2) {
                $stateResourceIdentifier = StateResourceIdentifierBuilder::of()->withId($state1->getId())->build();
                $updateAction = new ReviewTransitionStateActionBuilder();
                $reviewUpdateAction = $updateAction->withState($stateResourceIdentifier)->build();
                $updateActionCollection = new ReviewUpdateActionCollection();
                $updateActionCollection->add($reviewUpdateAction);
                $review1Update = ReviewUpdateBuilder::of()->withVersion($review->getVersion())
                    ->withActions($updateActionCollection)->build();
                $request = $builder->with()->reviews()->withId($review->getId())->post($review1Update);
                $reviewWithState1 = $request->execute();

                $this->assertInstanceOf(Review::class, $reviewWithState1);
                $this->assertNotSame($review->getVersion(), $reviewWithState1->getVersion());
                $this->assertSame($review->getId(), $reviewWithState1->getId());

                $stateResourceIdentifier2 = StateResourceIdentifierBuilder::of()->withId($state2->getId())->build();
                $updateAction2 = new ReviewTransitionStateActionBuilder();
                $reviewUpdateAction2 = $updateAction2->withState($stateResourceIdentifier2)->build();
                $updateActionCollection2 = new ReviewUpdateActionCollection();
                $updateActionCollection2->add($reviewUpdateAction2);
                $review2Update = ReviewUpdateBuilder::of()->withVersion($reviewWithState1->getVersion())
                    ->withActions($updateActionCollection2)->build();
                $request = $builder->with()->reviews()->withKey($reviewWithState1->getKey())->post($review2Update);
                $reviewWithState2 = $request->execute();

                $this->assertInstanceOf(Review::class, $reviewWithState2);
                $this->assertNotSame($review->getVersion(), $reviewWithState2->getVersion());
                $this->assertSame($review->getId(), $reviewWithState2->getId());

                return $reviewWithState2;
            }
        );
        $request1 = $builder->with()->states()->withId($state2->getId())->delete()->withVersion($state2->getVersion());

        $request1->execute();
        $request2 = $builder->with()->states()->withId($state1->getId())->delete()->withVersion($state1->getVersion());

        $request2->execute();
    }

}
