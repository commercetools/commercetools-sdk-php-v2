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
 * @implements Builder<OrderSearchFullTextExpression>
 */
final class OrderSearchFullTextExpressionBuilder implements Builder
{
    /**

     * @var null|OrderSearchFullTextValue|OrderSearchFullTextValueBuilder
     */
    private $fullText;

    /**

     * @return null|OrderSearchFullTextValue
     */
    public function getFullText()
    {
        return $this->fullText instanceof OrderSearchFullTextValueBuilder ? $this->fullText->build() : $this->fullText;
    }

    /**
     * @param ?OrderSearchFullTextValue $fullText
     * @return $this
     */
    public function withFullText(?OrderSearchFullTextValue $fullText)
    {
        $this->fullText = $fullText;

        return $this;
    }

    /**
     * @deprecated use withFullText() instead
     * @return $this
     */
    public function withFullTextBuilder(?OrderSearchFullTextValueBuilder $fullText)
    {
        $this->fullText = $fullText;

        return $this;
    }

    public function build(): OrderSearchFullTextExpression
    {
        return new OrderSearchFullTextExpressionModel(
            $this->fullText instanceof OrderSearchFullTextValueBuilder ? $this->fullText->build() : $this->fullText
        );
    }

    public static function of(): OrderSearchFullTextExpressionBuilder
    {
        return new self();
    }
}
