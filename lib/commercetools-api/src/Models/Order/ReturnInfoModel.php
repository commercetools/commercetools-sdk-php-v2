<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;

use DateTimeImmutableModel;
use stdClass;

final class ReturnInfoModel extends JsonObjectModel implements ReturnInfo
{
    /**
     * @var ?ReturnItemCollection
     */
    protected $items;

    /**
     * @var ?string
     */
    protected $returnTrackingId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $returnDate;


    public function __construct(
        ReturnItemCollection $items = null,
        string $returnTrackingId = null,
        DateTimeImmutable $returnDate = null
    ) {
        $this->items = $items;
        $this->returnTrackingId = $returnTrackingId;
        $this->returnDate = $returnDate;
    }

    /**
     * @return null|ReturnItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ReturnInfo::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = ReturnItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * <p>Identifies, which return tracking ID is connected to this particular return.</p>
     *
     * @return null|string
     */
    public function getReturnTrackingId()
    {
        if (is_null($this->returnTrackingId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnInfo::FIELD_RETURN_TRACKING_ID);
            if (is_null($data)) {
                return null;
            }
            $this->returnTrackingId = (string) $data;
        }

        return $this->returnTrackingId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getReturnDate()
    {
        if (is_null($this->returnDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnInfo::FIELD_RETURN_DATE);
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

    public function setItems(?ReturnItemCollection $items): void
    {
        $this->items = $items;
    }

    public function setReturnTrackingId(?string $returnTrackingId): void
    {
        $this->returnTrackingId = $returnTrackingId;
    }

    public function setReturnDate(?DateTimeImmutable $returnDate): void
    {
        $this->returnDate = $returnDate;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ReturnInfo::FIELD_RETURN_DATE]) && $data[ReturnInfo::FIELD_RETURN_DATE] instanceof \DateTimeImmutable) {
            $data[ReturnInfo::FIELD_RETURN_DATE] = $data[ReturnInfo::FIELD_RETURN_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
