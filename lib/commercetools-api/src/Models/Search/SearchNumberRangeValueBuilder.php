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
use stdClass;

/**
 * @implements Builder<SearchNumberRangeValue>
 */
final class SearchNumberRangeValueBuilder implements Builder
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

     * @var ?float
     */
    private $gte;

    /**

     * @var ?float
     */
    private $gt;

    /**

     * @var ?float
     */
    private $lte;

    /**

     * @var ?float
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

     * @return null|float
     */
    public function getGte()
    {
        return $this->gte;
    }

    /**

     * @return null|float
     */
    public function getGt()
    {
        return $this->gt;
    }

    /**

     * @return null|float
     */
    public function getLte()
    {
        return $this->lte;
    }

    /**

     * @return null|float
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
     * @param ?float $gte
     * @return $this
     */
    public function withGte(?float $gte)
    {
        $this->gte = $gte;

        return $this;
    }

    /**
     * @param ?float $gt
     * @return $this
     */
    public function withGt(?float $gt)
    {
        $this->gt = $gt;

        return $this;
    }

    /**
     * @param ?float $lte
     * @return $this
     */
    public function withLte(?float $lte)
    {
        $this->lte = $lte;

        return $this;
    }

    /**
     * @param ?float $lt
     * @return $this
     */
    public function withLt(?float $lt)
    {
        $this->lt = $lt;

        return $this;
    }


    public function build(): SearchNumberRangeValue
    {
        return new SearchNumberRangeValueModel(
            $this->field,
            $this->boost,
            $this->fieldType,
            $this->gte,
            $this->gt,
            $this->lte,
            $this->lt
        );
    }

    public static function of(): SearchNumberRangeValueBuilder
    {
        return new self();
    }
}
