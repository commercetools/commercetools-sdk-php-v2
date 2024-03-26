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
 * @implements Builder<SearchFullTextPrefixExpression>
 */
final class SearchFullTextPrefixExpressionBuilder implements Builder
{
    /**

     * @var null|SearchFullTextPrefixValue|SearchFullTextPrefixValueBuilder
     */
    private $fullTextPrefix;

    /**

     * @return null|SearchFullTextPrefixValue
     */
    public function getFullTextPrefix()
    {
        return $this->fullTextPrefix instanceof SearchFullTextPrefixValueBuilder ? $this->fullTextPrefix->build() : $this->fullTextPrefix;
    }

    /**
     * @param ?SearchFullTextPrefixValue $fullTextPrefix
     * @return $this
     */
    public function withFullTextPrefix(?SearchFullTextPrefixValue $fullTextPrefix)
    {
        $this->fullTextPrefix = $fullTextPrefix;

        return $this;
    }

    /**
     * @deprecated use withFullTextPrefix() instead
     * @return $this
     */
    public function withFullTextPrefixBuilder(?SearchFullTextPrefixValueBuilder $fullTextPrefix)
    {
        $this->fullTextPrefix = $fullTextPrefix;

        return $this;
    }

    public function build(): SearchFullTextPrefixExpression
    {
        return new SearchFullTextPrefixExpressionModel(
            $this->fullTextPrefix instanceof SearchFullTextPrefixValueBuilder ? $this->fullTextPrefix->build() : $this->fullTextPrefix
        );
    }

    public static function of(): SearchFullTextPrefixExpressionBuilder
    {
        return new self();
    }
}
