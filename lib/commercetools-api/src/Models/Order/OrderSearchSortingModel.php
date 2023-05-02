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
final class OrderSearchSortingModel extends JsonObjectModel implements OrderSearchSorting
{
    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?string
     */
    protected $language;

    /**
     *
     * @var ?string
     */
    protected $order;

    /**
     *
     * @var ?string
     */
    protected $mode;

    /**
     *
     * @var ?OrderSearchQueryExpression
     */
    protected $filter;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?string $language = null,
        ?string $order = null,
        ?string $mode = null,
        ?OrderSearchQueryExpression $filter = null
    ) {
        $this->field = $field;
        $this->language = $language;
        $this->order = $order;
        $this->mode = $mode;
        $this->filter = $filter;
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
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->order = (string) $data;
        }

        return $this->order;
    }

    /**
     *
     * @return null|string
     */
    public function getMode()
    {
        if (is_null($this->mode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->mode = (string) $data;
        }

        return $this->mode;
    }

    /**
     *
     * @return null|OrderSearchQueryExpression
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }

            $this->filter = OrderSearchQueryExpressionModel::of($data);
        }

        return $this->filter;
    }


    /**
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @param ?string $order
     */
    public function setOrder(?string $order): void
    {
        $this->order = $order;
    }

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * @param ?OrderSearchQueryExpression $filter
     */
    public function setFilter(?OrderSearchQueryExpression $filter): void
    {
        $this->filter = $filter;
    }
}
