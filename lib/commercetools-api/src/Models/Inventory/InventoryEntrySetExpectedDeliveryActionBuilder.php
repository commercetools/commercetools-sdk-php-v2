<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<InventoryEntrySetExpectedDeliveryAction>
 */
final class InventoryEntrySetExpectedDeliveryActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?DateTimeImmutable
     */
    private $expectedDelivery;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        return $this->expectedDelivery;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
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
            $this->action,
            $this->expectedDelivery
        );
    }

    public static function of(): InventoryEntrySetExpectedDeliveryActionBuilder
    {
        return new self();
    }
}
