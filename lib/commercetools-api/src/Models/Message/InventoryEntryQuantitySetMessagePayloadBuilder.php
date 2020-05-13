<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntryQuantitySetMessagePayload>
 */
final class InventoryEntryQuantitySetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $oldQuantityOnStock;

    /**
     * @var ?int
     */
    private $newQuantityOnStock;

    /**
     * @var ?int
     */
    private $oldAvailableQuantity;

    /**
     * @var ?int
     */
    private $newAvailableQuantity;

    /**
     * @return null|int
     */
    public function getOldQuantityOnStock()
    {
        return $this->oldQuantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getNewQuantityOnStock()
    {
        return $this->newQuantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getOldAvailableQuantity()
    {
        return $this->oldAvailableQuantity;
    }

    /**
     * @return null|int
     */
    public function getNewAvailableQuantity()
    {
        return $this->newAvailableQuantity;
    }

    /**
     * @return $this
     */
    public function withOldQuantityOnStock(?int $oldQuantityOnStock)
    {
        $this->oldQuantityOnStock = $oldQuantityOnStock;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewQuantityOnStock(?int $newQuantityOnStock)
    {
        $this->newQuantityOnStock = $newQuantityOnStock;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldAvailableQuantity(?int $oldAvailableQuantity)
    {
        $this->oldAvailableQuantity = $oldAvailableQuantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewAvailableQuantity(?int $newAvailableQuantity)
    {
        $this->newAvailableQuantity = $newAvailableQuantity;

        return $this;
    }


    public function build(): InventoryEntryQuantitySetMessagePayload
    {
        return new InventoryEntryQuantitySetMessagePayloadModel(
            $this->oldQuantityOnStock,
            $this->newQuantityOnStock,
            $this->oldAvailableQuantity,
            $this->newAvailableQuantity
        );
    }

    public static function of(): InventoryEntryQuantitySetMessagePayloadBuilder
    {
        return new self();
    }
}
