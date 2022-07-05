<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListReference>
 */
final class ShoppingListReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|ShoppingList|ShoppingListBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded ShoppingList. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ShoppingLists.</p>
     *

     * @return null|ShoppingList
     */
    public function getObj()
    {
        return $this->obj instanceof ShoppingListBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?ShoppingList $obj
     * @return $this
     */
    public function withObj(?ShoppingList $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ShoppingListBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ShoppingListReference
    {
        return new ShoppingListReferenceModel(
            $this->id,
            $this->obj instanceof ShoppingListBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ShoppingListReferenceBuilder
    {
        return new self();
    }
}
