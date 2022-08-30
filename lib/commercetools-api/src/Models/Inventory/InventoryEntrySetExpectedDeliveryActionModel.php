<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class InventoryEntrySetExpectedDeliveryActionModel extends JsonObjectModel implements InventoryEntrySetExpectedDeliveryAction
{
    public const DISCRIMINATOR_VALUE = 'setExpectedDelivery';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $expectedDelivery;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $expectedDelivery = null,
        ?string $action = null
    ) {
        $this->expectedDelivery = $expectedDelivery;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        if (is_null($this->expectedDelivery)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXPECTED_DELIVERY);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->expectedDelivery = $data;
        }

        return $this->expectedDelivery;
    }


    /**
     * @param ?DateTimeImmutable $expectedDelivery
     */
    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void
    {
        $this->expectedDelivery = $expectedDelivery;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY]) && $data[InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY] instanceof \DateTimeImmutable) {
            $data[InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY] = $data[InventoryEntrySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
