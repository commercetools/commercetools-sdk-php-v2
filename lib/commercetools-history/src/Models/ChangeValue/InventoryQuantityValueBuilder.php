<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryQuantityValue>
 */
final class InventoryQuantityValueBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $quantityOnStock;

    /**
     * @var ?int
     */
    private $availableQuantity;

    /**
     * @return null|int
     */
    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @param ?int $quantityOnStock
     * @return $this
     */
    public function withQuantityOnStock(?int $quantityOnStock)
    {
        $this->quantityOnStock = $quantityOnStock;

        return $this;
    }

    /**
     * @param ?int $availableQuantity
     * @return $this
     */
    public function withAvailableQuantity(?int $availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }


    public function build(): InventoryQuantityValue
    {
        return new InventoryQuantityValueModel(
            $this->quantityOnStock,
            $this->availableQuantity
        );
    }

    public static function of(): InventoryQuantityValueBuilder
    {
        return new self();
    }
}
