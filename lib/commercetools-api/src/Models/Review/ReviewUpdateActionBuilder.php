<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewUpdateAction>
 */
final class ReviewUpdateActionBuilder implements Builder
{
    public function build(): ReviewUpdateAction
    {
        return new ReviewUpdateActionModel(
        );
    }

    public static function of(): ReviewUpdateActionBuilder
    {
        return new self();
    }
}
