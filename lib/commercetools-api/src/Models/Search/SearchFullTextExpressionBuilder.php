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
 * @implements Builder<SearchFullTextExpression>
 */
final class SearchFullTextExpressionBuilder implements Builder
{
    /**

     * @var null|SearchFullTextValue|SearchFullTextValueBuilder
     */
    private $fullText;

    /**

     * @return null|SearchFullTextValue
     */
    public function getFullText()
    {
        return $this->fullText instanceof SearchFullTextValueBuilder ? $this->fullText->build() : $this->fullText;
    }

    /**
     * @param ?SearchFullTextValue $fullText
     * @return $this
     */
    public function withFullText(?SearchFullTextValue $fullText)
    {
        $this->fullText = $fullText;

        return $this;
    }

    /**
     * @deprecated use withFullText() instead
     * @return $this
     */
    public function withFullTextBuilder(?SearchFullTextValueBuilder $fullText)
    {
        $this->fullText = $fullText;

        return $this;
    }

    public function build(): SearchFullTextExpression
    {
        return new SearchFullTextExpressionModel(
            $this->fullText instanceof SearchFullTextValueBuilder ? $this->fullText->build() : $this->fullText
        );
    }

    public static function of(): SearchFullTextExpressionBuilder
    {
        return new self();
    }
}
