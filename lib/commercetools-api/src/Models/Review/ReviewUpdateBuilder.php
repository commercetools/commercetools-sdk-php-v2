<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewUpdate>
 */
final class ReviewUpdateBuilder implements Builder
{
    /**
     * @var ?ReviewUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @return null|ReviewUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withActions(?ReviewUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): ReviewUpdate
    {
        return new ReviewUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): ReviewUpdateBuilder
    {
        return new self();
    }
}
