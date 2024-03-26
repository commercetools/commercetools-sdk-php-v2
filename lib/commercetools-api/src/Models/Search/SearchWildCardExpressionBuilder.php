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
 * @implements Builder<SearchWildCardExpression>
 */
final class SearchWildCardExpressionBuilder implements Builder
{
    /**

     * @var null|SearchAnyValue|SearchAnyValueBuilder
     */
    private $wildcard;

    /**

     * @return null|SearchAnyValue
     */
    public function getWildcard()
    {
        return $this->wildcard instanceof SearchAnyValueBuilder ? $this->wildcard->build() : $this->wildcard;
    }

    /**
     * @param ?SearchAnyValue $wildcard
     * @return $this
     */
    public function withWildcard(?SearchAnyValue $wildcard)
    {
        $this->wildcard = $wildcard;

        return $this;
    }

    /**
     * @deprecated use withWildcard() instead
     * @return $this
     */
    public function withWildcardBuilder(?SearchAnyValueBuilder $wildcard)
    {
        $this->wildcard = $wildcard;

        return $this;
    }

    public function build(): SearchWildCardExpression
    {
        return new SearchWildCardExpressionModel(
            $this->wildcard instanceof SearchAnyValueBuilder ? $this->wildcard->build() : $this->wildcard
        );
    }

    public static function of(): SearchWildCardExpressionBuilder
    {
        return new self();
    }
}
