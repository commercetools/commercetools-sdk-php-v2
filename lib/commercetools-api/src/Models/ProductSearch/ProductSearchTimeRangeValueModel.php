<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ProductSearchTimeRangeValueModel extends JsonObjectModel implements ProductSearchTimeRangeValue
{
    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?float
     */
    protected $boost;

    /**
     *
     * @var ?string
     */
    protected $attributeType;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $gte;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $gt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lte;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?float $boost = null,
        ?string $attributeType = null,
        ?DateTimeImmutable $gte = null,
        ?DateTimeImmutable $gt = null,
        ?DateTimeImmutable $lte = null,
        ?DateTimeImmutable $lt = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->attributeType = $attributeType;
        $this->gte = $gte;
        $this->gt = $gt;
        $this->lte = $lte;
        $this->lt = $lt;
    }

    /**
     *
     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    /**
     *
     * @return null|float
     */
    public function getBoost()
    {
        if (is_null($this->boost)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_BOOST);
            if (is_null($data)) {
                return null;
            }
            $this->boost = (float) $data;
        }

        return $this->boost;
    }

    /**
     *
     * @return null|string
     */
    public function getAttributeType()
    {
        if (is_null($this->attributeType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->attributeType = (string) $data;
        }

        return $this->attributeType;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getGte()
    {
        if (is_null($this->gte)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_GTE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->gte = $data;
        }

        return $this->gte;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getGt()
    {
        if (is_null($this->gt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_GT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->gt = $data;
        }

        return $this->gt;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getLte()
    {
        if (is_null($this->lte)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LTE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lte = $data;
        }

        return $this->lte;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getLt()
    {
        if (is_null($this->lt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lt = $data;
        }

        return $this->lt;
    }


    /**
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param ?float $boost
     */
    public function setBoost(?float $boost): void
    {
        $this->boost = $boost;
    }

    /**
     * @param ?string $attributeType
     */
    public function setAttributeType(?string $attributeType): void
    {
        $this->attributeType = $attributeType;
    }

    /**
     * @param ?DateTimeImmutable $gte
     */
    public function setGte(?DateTimeImmutable $gte): void
    {
        $this->gte = $gte;
    }

    /**
     * @param ?DateTimeImmutable $gt
     */
    public function setGt(?DateTimeImmutable $gt): void
    {
        $this->gt = $gt;
    }

    /**
     * @param ?DateTimeImmutable $lte
     */
    public function setLte(?DateTimeImmutable $lte): void
    {
        $this->lte = $lte;
    }

    /**
     * @param ?DateTimeImmutable $lt
     */
    public function setLt(?DateTimeImmutable $lt): void
    {
        $this->lt = $lt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ProductSearchTimeRangeValue::FIELD_GTE]) && $data[ProductSearchTimeRangeValue::FIELD_GTE] instanceof \DateTimeImmutable) {
            $data[ProductSearchTimeRangeValue::FIELD_GTE] = $data[ProductSearchTimeRangeValue::FIELD_GTE]->format('H:i:s.u');
        }

        if (isset($data[ProductSearchTimeRangeValue::FIELD_GT]) && $data[ProductSearchTimeRangeValue::FIELD_GT] instanceof \DateTimeImmutable) {
            $data[ProductSearchTimeRangeValue::FIELD_GT] = $data[ProductSearchTimeRangeValue::FIELD_GT]->format('H:i:s.u');
        }

        if (isset($data[ProductSearchTimeRangeValue::FIELD_LTE]) && $data[ProductSearchTimeRangeValue::FIELD_LTE] instanceof \DateTimeImmutable) {
            $data[ProductSearchTimeRangeValue::FIELD_LTE] = $data[ProductSearchTimeRangeValue::FIELD_LTE]->format('H:i:s.u');
        }

        if (isset($data[ProductSearchTimeRangeValue::FIELD_LT]) && $data[ProductSearchTimeRangeValue::FIELD_LT] instanceof \DateTimeImmutable) {
            $data[ProductSearchTimeRangeValue::FIELD_LT] = $data[ProductSearchTimeRangeValue::FIELD_LT]->format('H:i:s.u');
        }
        return (object) $data;
    }
}
