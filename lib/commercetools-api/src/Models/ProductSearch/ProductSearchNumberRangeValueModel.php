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
final class ProductSearchNumberRangeValueModel extends JsonObjectModel implements ProductSearchNumberRangeValue
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
     * @var ?float
     */
    protected $gte;

    /**
     *
     * @var ?float
     */
    protected $gt;

    /**
     *
     * @var ?float
     */
    protected $lte;

    /**
     *
     * @var ?float
     */
    protected $lt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?float $boost = null,
        ?string $attributeType = null,
        ?float $gte = null,
        ?float $gt = null,
        ?float $lte = null,
        ?float $lt = null
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
     * @return null|float
     */
    public function getGte()
    {
        if (is_null($this->gte)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_GTE);
            if (is_null($data)) {
                return null;
            }
            $this->gte = (float) $data;
        }

        return $this->gte;
    }

    /**
     *
     * @return null|float
     */
    public function getGt()
    {
        if (is_null($this->gt)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_GT);
            if (is_null($data)) {
                return null;
            }
            $this->gt = (float) $data;
        }

        return $this->gt;
    }

    /**
     *
     * @return null|float
     */
    public function getLte()
    {
        if (is_null($this->lte)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_LTE);
            if (is_null($data)) {
                return null;
            }
            $this->lte = (float) $data;
        }

        return $this->lte;
    }

    /**
     *
     * @return null|float
     */
    public function getLt()
    {
        if (is_null($this->lt)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_LT);
            if (is_null($data)) {
                return null;
            }
            $this->lt = (float) $data;
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
     * @param ?float $gte
     */
    public function setGte(?float $gte): void
    {
        $this->gte = $gte;
    }

    /**
     * @param ?float $gt
     */
    public function setGt(?float $gt): void
    {
        $this->gt = $gt;
    }

    /**
     * @param ?float $lte
     */
    public function setLte(?float $lte): void
    {
        $this->lte = $lte;
    }

    /**
     * @param ?float $lt
     */
    public function setLt(?float $lt): void
    {
        $this->lt = $lt;
    }
}
