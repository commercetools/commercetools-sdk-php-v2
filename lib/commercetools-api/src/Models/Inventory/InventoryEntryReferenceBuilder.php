<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntryReference>
 */
final class InventoryEntryReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|InventoryEntry|InventoryEntryBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|InventoryEntry
     */
    public function getObj()
    {
        return $this->obj instanceof InventoryEntryBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?InventoryEntry $obj
     * @return $this
     */
    public function withObj(?InventoryEntry $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?InventoryEntryBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): InventoryEntryReference
    {
        return new InventoryEntryReferenceModel(
            $this->id,
            $this->obj instanceof InventoryEntryBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): InventoryEntryReferenceBuilder
    {
        return new self();
    }
}
