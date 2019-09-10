<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryUpdate>
 */
final class CategoryUpdateBuilder implements Builder
{
    /**
     * @var ?CategoryUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    public function __construct()
    {
    }

    /**
     * @return null|CategoryUpdateActionCollection
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
    public function withActions(?CategoryUpdateActionCollection $actions)
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

    public function build(): CategoryUpdate
    {
        return new CategoryUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): CategoryUpdateBuilder
    {
        return new self();
    }
}
