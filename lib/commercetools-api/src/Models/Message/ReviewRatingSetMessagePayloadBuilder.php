<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewRatingSetMessagePayload>
 */
final class ReviewRatingSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?float
     */
    private $oldRating;

    /**

     * @var ?float
     */
    private $newRating;

    /**

     * @var ?bool
     */
    private $includedInStatistics;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $target;

    /**
     * <p>The <code>rating</code> of the <a href="ctp:api:type:Review">Review</a> before the <a href="ctp:api:type:ReviewSetRatingAction">Set Rating</a> update action.</p>
     *

     * @return null|float
     */
    public function getOldRating()
    {
        return $this->oldRating;
    }

    /**
     * <p>The <code>rating</code> of the <a href="ctp:api:type:Review">Review</a> after the <a href="ctp:api:type:ReviewSetRatingAction">Set Rating</a> update action.</p>
     *

     * @return null|float
     */
    public function getNewRating()
    {
        return $this->newRating;
    }

    /**
     * <p>Whether the <a href="ctp:api:type:Review">Review</a> was taken into account in the ratings statistics of the target.</p>
     *

     * @return null|bool
     */
    public function getIncludedInStatistics()
    {
        return $this->includedInStatistics;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource that the <a href="ctp:api:type:Review">Review</a> belongs to.</p>
     *

     * @return null|Reference
     */
    public function getTarget()
    {
        return $this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target;
    }

    /**
     * @param ?float $oldRating
     * @return $this
     */
    public function withOldRating(?float $oldRating)
    {
        $this->oldRating = $oldRating;

        return $this;
    }

    /**
     * @param ?float $newRating
     * @return $this
     */
    public function withNewRating(?float $newRating)
    {
        $this->newRating = $newRating;

        return $this;
    }

    /**
     * @param ?bool $includedInStatistics
     * @return $this
     */
    public function withIncludedInStatistics(?bool $includedInStatistics)
    {
        $this->includedInStatistics = $includedInStatistics;

        return $this;
    }

    /**
     * @param ?Reference $target
     * @return $this
     */
    public function withTarget(?Reference $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @deprecated use withTarget() instead
     * @return $this
     */
    public function withTargetBuilder(?ReferenceBuilder $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): ReviewRatingSetMessagePayload
    {
        return new ReviewRatingSetMessagePayloadModel(
            $this->oldRating,
            $this->newRating,
            $this->includedInStatistics,
            $this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target
        );
    }

    public static function of(): ReviewRatingSetMessagePayloadBuilder
    {
        return new self();
    }
}
