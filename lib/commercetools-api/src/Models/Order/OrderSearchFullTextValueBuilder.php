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
 * @implements Builder<OrderSearchFullTextValue>
 */
final class OrderSearchFullTextValueBuilder implements Builder
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

     * @var ?string
     */
    private $value;

    /**

     * @var ?string
     */
    private $language;

    /**

     * @var ?string
     */
    private $mustMatch;

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

     * @return null|string
     */
    public function getCustomType()
    {
        return $this->customType;
    }

    /**

     * @return null|string
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

     * @return null|string
     */
    public function getMustMatch()
    {
        return $this->mustMatch;
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
     * @param ?string $value
     * @return $this
     */
    public function withValue(?string $value)
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
     * @param ?string $mustMatch
     * @return $this
     */
    public function withMustMatch(?string $mustMatch)
    {
        $this->mustMatch = $mustMatch;

        return $this;
    }


    public function build(): OrderSearchFullTextValue
    {
        return new OrderSearchFullTextValueModel(
            $this->field,
            $this->boost,
            $this->customType,
            $this->value,
            $this->language,
            $this->mustMatch
        );
    }

    public static function of(): OrderSearchFullTextValueBuilder
    {
        return new self();
    }
}
