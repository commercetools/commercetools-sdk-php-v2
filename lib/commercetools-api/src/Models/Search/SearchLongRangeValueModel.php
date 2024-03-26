<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SearchLongRangeValueModel extends JsonObjectModel implements SearchLongRangeValue
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
    protected $fieldType;

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
        ?string $fieldType = null,
        ?int $gte = null,
        ?int $gt = null,
        ?int $lte = null,
        ?int $lt = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->fieldType = $fieldType;
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
     * <p>Possible values for the <code>fieldType</code> property on query expressions indicating the data type of the <code>field</code>.</p>
     *
     *
     * @return null|string
     */
    public function getFieldType()
    {
        if (is_null($this->fieldType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->fieldType = (string) $data;
        }

        return $this->fieldType;
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
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void
    {
        $this->fieldType = $fieldType;
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
