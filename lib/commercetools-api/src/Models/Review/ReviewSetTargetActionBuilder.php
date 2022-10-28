<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Value to set, specified as <a href="ctp:api:type:ProductResourceIdentifier">ProductResourceIdentifier</a> or <a href="ctp:api:type:ChannelResourceIdentifier">ChannelResourceIdentifier</a>, respectively. If empty, any existing value will be removed.</p>
     *

     * @return null|JsonObject
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param ?JsonObject $target
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
