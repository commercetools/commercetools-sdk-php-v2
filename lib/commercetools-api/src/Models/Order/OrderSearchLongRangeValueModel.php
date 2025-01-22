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
use stdClass;

/**
 * @internal
 */
final class OrderSearchLongRangeValueModel extends JsonObjectModel implements OrderSearchLongRangeValue
{
    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?int
     */
    protected $boost;

    /**
     *
     * @var ?string
     */
    protected $customType;

    /**
     *
     * @var ?int
     */
    protected $gte;

    /**
     *
     * @var ?int
     */
    protected $lte;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?int $boost = null,
        ?string $customType = null,
        ?int $gte = null,
        ?int $lte = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->customType = $customType;
        $this->gte = $gte;
        $this->lte = $lte;
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
     * @return null|int
     */
    public function getBoost()
    {
        if (is_null($this->boost)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_BOOST);
            if (is_null($data)) {
                return null;
            }
            $this->boost = (int) $data;
        }

        return $this->boost;
    }

    /**
     * <p>Possible values for the <code>customType</code> property on <a href="/../api/projects/order-search#simple-expressions">simple expressions</a> indicating the data type of the <code>field</code>.</p>
     *
     *
     * @return null|string
     */
    public function getCustomType()
    {
        if (is_null($this->customType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->customType = (string) $data;
        }

        return $this->customType;
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
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param ?int $boost
     */
    public function setBoost(?int $boost): void
    {
        $this->boost = $boost;
    }

    /**
     * @param ?string $customType
     */
    public function setCustomType(?string $customType): void
    {
        $this->customType = $customType;
    }

    /**
     * @param ?int $gte
     */
    public function setGte(?int $gte): void
    {
        $this->gte = $gte;
    }

    /**
     * @param ?int $lte
     */
    public function setLte(?int $lte): void
    {
        $this->lte = $lte;
    }
}
