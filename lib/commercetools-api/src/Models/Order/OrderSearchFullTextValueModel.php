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
final class OrderSearchFullTextValueModel extends JsonObjectModel implements OrderSearchFullTextValue
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
     * @var ?string
     */
    protected $mustMatch;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?int $boost = null,
        ?string $customType = null,
        ?string $value = null,
        ?string $language = null,
        ?string $mustMatch = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->customType = $customType;
        $this->value = $value;
        $this->language = $language;
        $this->mustMatch = $mustMatch;
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
     * @return null|string
     */
    public function getMustMatch()
    {
        if (is_null($this->mustMatch)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MUST_MATCH);
            if (is_null($data)) {
                return null;
            }
            $this->mustMatch = (string) $data;
        }

        return $this->mustMatch;
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
     * @param ?string $mustMatch
     */
    public function setMustMatch(?string $mustMatch): void
    {
        $this->mustMatch = $mustMatch;
    }
}
