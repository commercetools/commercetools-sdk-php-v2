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
final class OrderSearchStringValueModel extends JsonObjectModel implements OrderSearchStringValue
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
     * @var ?string
     */
    protected $value;

    /**
     *
     * @var ?string
     */
    protected $language;

    /**
     *
     * @var ?bool
     */
    protected $caseInsensitive;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?int $boost = null,
        ?string $customType = null,
        ?string $value = null,
        ?string $language = null,
        ?bool $caseInsensitive = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->customType = $customType;
        $this->value = $value;
        $this->language = $language;
        $this->caseInsensitive = $caseInsensitive;
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
     * <p>Possible values for the <code>customType</code> property on <a href="/../api/projects/order-search#query-expressions">query expressions</a> indicating the data type of the <code>field</code>.</p>
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
     * @return null|string
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (string) $data;
        }

        return $this->value;
    }

    /**
     *
     * @return null|string
     */
    public function getLanguage()
    {
        if (is_null($this->language)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LANGUAGE);
            if (is_null($data)) {
                return null;
            }
            $this->language = (string) $data;
        }

        return $this->language;
    }

    /**
     *
     * @return null|bool
     */
    public function getCaseInsensitive()
    {
        if (is_null($this->caseInsensitive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_CASE_INSENSITIVE);
            if (is_null($data)) {
                return null;
            }
            $this->caseInsensitive = (bool) $data;
        }

        return $this->caseInsensitive;
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
     * @param ?string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @param ?bool $caseInsensitive
     */
    public function setCaseInsensitive(?bool $caseInsensitive): void
    {
        $this->caseInsensitive = $caseInsensitive;
    }
}
