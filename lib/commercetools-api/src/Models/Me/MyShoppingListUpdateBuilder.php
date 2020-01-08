<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListUpdate>
 */
final class MyShoppingListUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?MyShoppingListUpdateActionCollection
     */
    private $actions;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|MyShoppingListUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActions(?MyShoppingListUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): MyShoppingListUpdate
    {
        return new MyShoppingListUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): MyShoppingListUpdateBuilder
    {
        return new self();
    }
}
