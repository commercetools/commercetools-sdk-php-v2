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
 * @implements Builder<SearchFuzzyExpression>
 */
final class SearchFuzzyExpressionBuilder implements Builder
{
    /**

     * @var null|SearchFuzzyValue|SearchFuzzyValueBuilder
     */
    private $fuzzy;

    /**

     * @return null|SearchFuzzyValue
     */
    public function getFuzzy()
    {
        return $this->fuzzy instanceof SearchFuzzyValueBuilder ? $this->fuzzy->build() : $this->fuzzy;
    }

    /**
     * @param ?SearchFuzzyValue $fuzzy
     * @return $this
     */
    public function withFuzzy(?SearchFuzzyValue $fuzzy)
    {
        $this->fuzzy = $fuzzy;

        return $this;
    }

    /**
     * @deprecated use withFuzzy() instead
     * @return $this
     */
    public function withFuzzyBuilder(?SearchFuzzyValueBuilder $fuzzy)
    {
        $this->fuzzy = $fuzzy;

        return $this;
    }

    public function build(): SearchFuzzyExpression
    {
        return new SearchFuzzyExpressionModel(
            $this->fuzzy instanceof SearchFuzzyValueBuilder ? $this->fuzzy->build() : $this->fuzzy
        );
    }

    public static function of(): SearchFuzzyExpressionBuilder
    {
        return new self();
    }
}
