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
 * @implements Builder<SearchPrefixExpression>
 */
final class SearchPrefixExpressionBuilder implements Builder
{
    /**

     * @var null|SearchAnyValue|SearchAnyValueBuilder
     */
    private $prefix;

    /**

     * @return null|SearchAnyValue
     */
    public function getPrefix()
    {
        return $this->prefix instanceof SearchAnyValueBuilder ? $this->prefix->build() : $this->prefix;
    }

    /**
     * @param ?SearchAnyValue $prefix
     * @return $this
     */
    public function withPrefix(?SearchAnyValue $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @deprecated use withPrefix() instead
     * @return $this
     */
    public function withPrefixBuilder(?SearchAnyValueBuilder $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function build(): SearchPrefixExpression
    {
        return new SearchPrefixExpressionModel(
            $this->prefix instanceof SearchAnyValueBuilder ? $this->prefix->build() : $this->prefix
        );
    }

    public static function of(): SearchPrefixExpressionBuilder
    {
        return new self();
    }
}
