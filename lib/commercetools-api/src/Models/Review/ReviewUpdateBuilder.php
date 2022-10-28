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
 * @implements Builder<ReviewUpdate>
 */
final class ReviewUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?ReviewUpdateActionCollection
     */
    private $actions;

    /**
     * <p>The expected version of the review on which the changes should be applied. If the expected version does not match the actual version, a 409 Conflict will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The list of update actions to be performed on the review.</p>
     *

     * @return null|ReviewUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?ReviewUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?ReviewUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): ReviewUpdate
    {
        return new ReviewUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): ReviewUpdateBuilder
    {
        return new self();
    }
}
