<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class OrderAddReturnInfoActionModel extends JsonObjectModel implements OrderAddReturnInfoAction
{
    const DISCRIMINATOR_VALUE = 'addReturnInfo';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?DateTimeImmutable
     */
    protected $returnDate;

    /**
     * @var ?string
     */
    protected $returnTrackingId;

    /**
     * @var ?ReturnItemDraftCollection
     */
    protected $items;

    public function __construct(
        string $action = null,
        DateTimeImmutable $returnDate = null,
        string $returnTrackingId = null,
        ReturnItemDraftCollection $items = null
    ) {
        $this->action = $action;
        $this->returnDate = $returnDate;
        $this->returnTrackingId = $returnTrackingId;
        $this->items = $items;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getReturnDate()
    {
        if (is_null($this->returnDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderAddReturnInfoAction::FIELD_RETURN_DATE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->returnDate = $data;
        }

        return $this->returnDate;
    }

    /**
     * @return null|string
     */
    public function getReturnTrackingId()
    {
        if (is_null($this->returnTrackingId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderAddReturnInfoAction::FIELD_RETURN_TRACKING_ID);
            if (is_null($data)) {
                return null;
            }
            $this->returnTrackingId = (string) $data;
        }

        return $this->returnTrackingId;
    }

    /**
     * @return null|ReturnItemDraftCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(OrderAddReturnInfoAction::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = ReturnItemDraftCollection::fromArray($data);
        }

        return $this->items;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setReturnDate(?DateTimeImmutable $returnDate): void
    {
        $this->returnDate = $returnDate;
    }

    public function setReturnTrackingId(?string $returnTrackingId): void
    {
        $this->returnTrackingId = $returnTrackingId;
    }

    public function setItems(?ReturnItemDraftCollection $items): void
    {
        $this->items = $items;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderAddReturnInfoAction::FIELD_RETURN_DATE]) && $data[OrderAddReturnInfoAction::FIELD_RETURN_DATE] instanceof \DateTimeImmutable) {
            $data[OrderAddReturnInfoAction::FIELD_RETURN_DATE] = $data[OrderAddReturnInfoAction::FIELD_RETURN_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
