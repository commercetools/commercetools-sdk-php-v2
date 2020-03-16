<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\ReturnItemDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use DateTimeImmutableModel;
use stdClass;

/**
 * @internal
 */
final class StagedOrderAddReturnInfoActionModel extends JsonObjectModel implements StagedOrderAddReturnInfoAction
{
    public const DISCRIMINATOR_VALUE = 'addReturnInfo';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $returnTrackingId;

    /**
     * @var ?ReturnItemDraftCollection
     */
    protected $items;

    /**
     * @var ?DateTimeImmutable
     */
    protected $returnDate;


    public function __construct(
        string $returnTrackingId = null,
        ReturnItemDraftCollection $items = null,
        DateTimeImmutable $returnDate = null
    ) {
        $this->returnTrackingId = $returnTrackingId;
        $this->items = $items;
        $this->returnDate = $returnDate;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getReturnTrackingId()
    {
        if (is_null($this->returnTrackingId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderAddReturnInfoAction::FIELD_RETURN_TRACKING_ID);
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
            $data = $this->raw(StagedOrderAddReturnInfoAction::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = ReturnItemDraftCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getReturnDate()
    {
        if (is_null($this->returnDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderAddReturnInfoAction::FIELD_RETURN_DATE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->returnDate = $data;
        }

        return $this->returnDate;
    }

    public function setReturnTrackingId(?string $returnTrackingId): void
    {
        $this->returnTrackingId = $returnTrackingId;
    }

    public function setItems(?ReturnItemDraftCollection $items): void
    {
        $this->items = $items;
    }

    public function setReturnDate(?DateTimeImmutable $returnDate): void
    {
        $this->returnDate = $returnDate;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[StagedOrderAddReturnInfoAction::FIELD_RETURN_DATE]) && $data[StagedOrderAddReturnInfoAction::FIELD_RETURN_DATE] instanceof \DateTimeImmutable) {
            $data[StagedOrderAddReturnInfoAction::FIELD_RETURN_DATE] = $data[StagedOrderAddReturnInfoAction::FIELD_RETURN_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
