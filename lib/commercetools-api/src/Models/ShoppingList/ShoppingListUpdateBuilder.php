<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShoppingListUpdate>
 */
final class ShoppingListUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?ShoppingListUpdateActionCollection
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
     * @return null|ShoppingListUpdateActionCollection
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
    public function withActions(?ShoppingListUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): ShoppingListUpdate
    {
        return new ShoppingListUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): ShoppingListUpdateBuilder
    {
        return new self();
    }
}
