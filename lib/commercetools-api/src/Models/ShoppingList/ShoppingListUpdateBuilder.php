<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Expected version of the ShoppingList on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
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

     * @return null|ShoppingListUpdateActionCollection
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
     * @param ?ShoppingListUpdateActionCollection $actions
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
