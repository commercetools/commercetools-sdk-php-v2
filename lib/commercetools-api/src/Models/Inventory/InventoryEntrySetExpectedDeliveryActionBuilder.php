<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<InventoryEntrySetExpectedDeliveryAction>
 */
final class InventoryEntrySetExpectedDeliveryActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $expectedDelivery;

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        return $this->expectedDelivery;
    }

    /**
     * @param ?DateTimeImmutable $expectedDelivery
     * @return $this
     */
    public function withExpectedDelivery(?DateTimeImmutable $expectedDelivery)
    {
        $this->expectedDelivery = $expectedDelivery;

        return $this;
    }


    public function build(): InventoryEntrySetExpectedDeliveryAction
    {
        return new InventoryEntrySetExpectedDeliveryActionModel(
            $this->expectedDelivery
        );
    }

    public static function of(): InventoryEntrySetExpectedDeliveryActionBuilder
    {
        return new self();
    }
}
