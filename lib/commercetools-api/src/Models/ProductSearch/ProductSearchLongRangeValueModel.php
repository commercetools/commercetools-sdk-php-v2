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
use stdClass;

/**
 * @internal
 */
final class ProductSearchLongRangeValueModel extends JsonObjectModel implements ProductSearchLongRangeValue
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
     * @var ?int
     */
    protected $gte;

    /**
     *
     * @var ?int
     */
    protected $gt;

    /**
     *
     * @var ?int
     */
    protected $lte;

    /**
     *
     * @var ?int
     */
    protected $lt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?float $boost = null,
        ?string $attributeType = null,
        ?int $gte = null,
        ?int $gt = null,
        ?int $lte = null,
        ?int $lt = null
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
     * @return null|int
     */
    public function getGte()
    {
        if (is_null($this->gte)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_GTE);
            if (is_null($data)) {
                return null;
            }
            $this->gte = (int) $data;
        }

        return $this->gte;
    }

    /**
     *
     * @return null|int
     */
    public function getGt()
    {
        if (is_null($this->gt)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_GT);
            if (is_null($data)) {
                return null;
            }
            $this->gt = (int) $data;
        }

        return $this->gt;
    }

    /**
     *
     * @return null|int
     */
    public function getLte()
    {
        if (is_null($this->lte)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LTE);
            if (is_null($data)) {
                return null;
            }
            $this->lte = (int) $data;
        }

        return $this->lte;
    }

    /**
     *
     * @return null|int
     */
    public function getLt()
    {
        if (is_null($this->lt)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LT);
            if (is_null($data)) {
                return null;
            }
            $this->lt = (int) $data;
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
     * @param ?int $gte
     */
    public function setGte(?int $gte): void
    {
        $this->gte = $gte;
    }

    /**
     * @param ?int $gt
     */
    public function setGt(?int $gt): void
    {
        $this->gt = $gt;
    }

    /**
     * @param ?int $lte
     */
    public function setLte(?int $lte): void
    {
        $this->lte = $lte;
    }

    /**
     * @param ?int $lt
     */
    public function setLt(?int $lt): void
    {
        $this->lt = $lt;
    }
}
