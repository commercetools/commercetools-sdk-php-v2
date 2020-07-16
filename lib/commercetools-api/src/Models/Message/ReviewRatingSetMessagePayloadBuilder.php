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
     * @return null|float
     */
    public function getOldRating()
    {
        return $this->oldRating;
    }

    /**
     * @return null|float
     */
    public function getNewRating()
    {
        return $this->newRating;
    }

    /**
     * @return null|bool
     */
    public function getIncludedInStatistics()
    {
        return $this->includedInStatistics;
    }

    /**
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
