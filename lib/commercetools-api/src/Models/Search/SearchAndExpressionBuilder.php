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
 * @implements Builder<SearchAndExpression>
 */
final class SearchAndExpressionBuilder implements Builder
{
    /**

     * @var ?SearchQueryCollection
     */
    private $and;

    /**

     * @return null|SearchQueryCollection
     */
    public function getAnd()
    {
        return $this->and;
    }

    /**
     * @param ?SearchQueryCollection $and
     * @return $this
     */
    public function withAnd(?SearchQueryCollection $and)
    {
        $this->and = $and;

        return $this;
    }


    public function build(): SearchAndExpression
    {
        return new SearchAndExpressionModel(
            $this->and
        );
    }

    public static function of(): SearchAndExpressionBuilder
    {
        return new self();
    }
}
