<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<SearchDateRangeValue>
 */
final class SearchDateRangeValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $field;

    /**

     * @var ?float
     */
    private $boost;

    /**

     * @var ?string
     */
    private $fieldType;

    /**

     * @var ?DateTimeImmutable
     */
    private $gte;

    /**

     * @var ?DateTimeImmutable
     */
    private $gt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lte;

    /**

     * @var ?DateTimeImmutable
     */
    private $lt;

    /**

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**

     * @return null|float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * <p>Possible values for the <code>fieldType</code> property on <a href="/../api/search-query-language#query-expressions">query expressions</a> indicating the data type of the <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getGte()
    {
        return $this->gte;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getGt()
    {
        return $this->gt;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getLte()
    {
        return $this->lte;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getLt()
    {
        return $this->lt;
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
     * @param ?float $boost
     * @return $this
     */
    public function withBoost(?float $boost)
    {
        $this->boost = $boost;

        return $this;
    }

    /**
     * @param ?string $fieldType
     * @return $this
     */
    public function withFieldType(?string $fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $gte
     * @return $this
     */
    public function withGte(?DateTimeImmutable $gte)
    {
        $this->gte = $gte;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $gt
     * @return $this
     */
    public function withGt(?DateTimeImmutable $gt)
    {
        $this->gt = $gt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lte
     * @return $this
     */
    public function withLte(?DateTimeImmutable $lte)
    {
        $this->lte = $lte;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lt
     * @return $this
     */
    public function withLt(?DateTimeImmutable $lt)
    {
        $this->lt = $lt;

        return $this;
    }


    public function build(): SearchDateRangeValue
    {
        return new SearchDateRangeValueModel(
            $this->field,
            $this->boost,
            $this->fieldType,
            $this->gte,
            $this->gt,
            $this->lte,
            $this->lt
        );
    }

    public static function of(): SearchDateRangeValueBuilder
    {
        return new self();
    }
}
