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
 * @implements Builder<SearchExactExpression>
 */
final class SearchExactExpressionBuilder implements Builder
{
    /**

     * @var null|SearchAnyValue|SearchAnyValueBuilder
     */
    private $exact;

    /**

     * @return null|SearchAnyValue
     */
    public function getExact()
    {
        return $this->exact instanceof SearchAnyValueBuilder ? $this->exact->build() : $this->exact;
    }

    /**
     * @param ?SearchAnyValue $exact
     * @return $this
     */
    public function withExact(?SearchAnyValue $exact)
    {
        $this->exact = $exact;

        return $this;
    }

    /**
     * @deprecated use withExact() instead
     * @return $this
     */
    public function withExactBuilder(?SearchAnyValueBuilder $exact)
    {
        $this->exact = $exact;

        return $this;
    }

    public function build(): SearchExactExpression
    {
        return new SearchExactExpressionModel(
            $this->exact instanceof SearchAnyValueBuilder ? $this->exact->build() : $this->exact
        );
    }

    public static function of(): SearchExactExpressionBuilder
    {
        return new self();
    }
}
