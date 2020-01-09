<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ReviewSetTargetAction>
 */
final class ReviewSetTargetActionBuilder implements Builder
{
    /**
     * @var ?JsonObject
     */
    private $target;

    /**
     * <p>Identifies the target of the review.
     * Can be a Product or a Channel.
     * If <code>target</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|JsonObject
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return $this
     */
    public function withTarget(?JsonObject $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): ReviewSetTargetAction
    {
        return new ReviewSetTargetActionModel(
            $this->target
        );
    }

    public static function of(): ReviewSetTargetActionBuilder
    {
        return new self();
    }
}
