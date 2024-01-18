<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchFullTextExpression>
 */
final class ProductSearchFullTextExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchFullTextValue|ProductSearchFullTextValueBuilder
     */
    private $fullText;

    /**

     * @return null|ProductSearchFullTextValue
     */
    public function getFullText()
    {
        return $this->fullText instanceof ProductSearchFullTextValueBuilder ? $this->fullText->build() : $this->fullText;
    }

    /**
     * @param ?ProductSearchFullTextValue $fullText
     * @return $this
     */
    public function withFullText(?ProductSearchFullTextValue $fullText)
    {
        $this->fullText = $fullText;

        return $this;
    }

    /**
     * @deprecated use withFullText() instead
     * @return $this
     */
    public function withFullTextBuilder(?ProductSearchFullTextValueBuilder $fullText)
    {
        $this->fullText = $fullText;

        return $this;
    }

    public function build(): ProductSearchFullTextExpression
    {
        return new ProductSearchFullTextExpressionModel(
            $this->fullText instanceof ProductSearchFullTextValueBuilder ? $this->fullText->build() : $this->fullText
        );
    }

    public static function of(): ProductSearchFullTextExpressionBuilder
    {
        return new self();
    }
}
