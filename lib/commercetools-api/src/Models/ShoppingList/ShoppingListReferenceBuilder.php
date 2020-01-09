<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;

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
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|ShoppingList
     */
    public function getObj()
    {
        return $this->obj instanceof ShoppingListBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?ShoppingList $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
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
