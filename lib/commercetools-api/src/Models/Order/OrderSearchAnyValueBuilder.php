<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSearchAnyValue>
 */
final class OrderSearchAnyValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $field;

    /**

     * @var ?int
     */
    private $boost;

    /**

     * @var ?string
     */
    private $customType;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**

     * @var ?string
     */
    private $language;

    /**

     * @var ?bool
     */
    private $caseInsensitive;

    /**

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**

     * @return null|int
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * <p>Possible values for the <code>customType</code> property on <a href="/../api/projects/order-search#simple-expressions">simple expressions</a> indicating the data type of the <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getCustomType()
    {
        return $this->customType;
    }

    /**

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**

     * @return null|string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**

     * @return null|bool
     */
    public function getCaseInsensitive()
    {
        return $this->caseInsensitive;
    }

    /**
     * @param ?string $field
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @param ?int $boost
     * @return $this
     */
    public function withBoost(?int $boost)
    {
        $this->boost = $boost;

        return $this;
    }

    /**
     * @param ?string $customType
     * @return $this
     */
    public function withCustomType(?string $customType)
    {
        $this->customType = $customType;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?string $language
     * @return $this
     */
    public function withLanguage(?string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @param ?bool $caseInsensitive
     * @return $this
     */
    public function withCaseInsensitive(?bool $caseInsensitive)
    {
        $this->caseInsensitive = $caseInsensitive;

        return $this;
    }


    public function build(): OrderSearchAnyValue
    {
        return new OrderSearchAnyValueModel(
            $this->field,
            $this->boost,
            $this->customType,
            $this->value,
            $this->language,
            $this->caseInsensitive
        );
    }

    public static function of(): OrderSearchAnyValueBuilder
    {
        return new self();
    }
}
