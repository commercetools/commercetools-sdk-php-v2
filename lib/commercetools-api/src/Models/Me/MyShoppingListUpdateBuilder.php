<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Expected version of the ShoppingList on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>List of update actions to be performed on the ShoppingList.</p>
     *

     * @return null|MyShoppingListUpdateActionCollection
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
     * @param ?MyShoppingListUpdateActionCollection $actions
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
