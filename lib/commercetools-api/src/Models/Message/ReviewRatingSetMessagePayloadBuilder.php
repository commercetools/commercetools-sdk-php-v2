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

/**
 * @implements Builder<ReviewRatingSetMessagePayload>
 */
final class ReviewRatingSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $oldRating;

    /**
     * @var ?bool
     */
    private $includedInStatistics;

    /**
     * @var ?int
     */
    private $newRating;

    /**
     * @var Reference|?ReferenceBuilder
     */
    private $target;

    /**
     * @return null|int
     */
    public function getOldRating()
    {
        return $this->oldRating;
    }

    /**
     * @return null|bool
     */
    public function getIncludedInStatistics()
    {
        return $this->includedInStatistics;
    }

    /**
     * @return null|int
     */
    public function getNewRating()
    {
        return $this->newRating;
    }

    /**
     * @return null|Reference
     */
    public function getTarget()
    {
        return $this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target;
    }

    /**
     * @return $this
     */
    public function withOldRating(?int $oldRating)
    {
        $this->oldRating = $oldRating;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIncludedInStatistics(?bool $includedInStatistics)
    {
        $this->includedInStatistics = $includedInStatistics;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewRating(?int $newRating)
    {
        $this->newRating = $newRating;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTarget(?Reference $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
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
            $this->includedInStatistics,
            $this->newRating,
            ($this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target)
        );
    }

    public static function of(): ReviewRatingSetMessagePayloadBuilder
    {
        return new self();
    }
}
