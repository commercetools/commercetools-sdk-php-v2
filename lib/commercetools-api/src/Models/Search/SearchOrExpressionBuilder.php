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
 * @implements Builder<SearchOrExpression>
 */
final class SearchOrExpressionBuilder implements Builder
{
    /**

     * @var ?SearchQueryCollection
     */
    private $or;

    /**

     * @return null|SearchQueryCollection
     */
    public function getOr()
    {
        return $this->or;
    }

    /**
     * @param ?SearchQueryCollection $or
     * @return $this
     */
    public function withOr(?SearchQueryCollection $or)
    {
        $this->or = $or;

        return $this;
    }


    public function build(): SearchOrExpression
    {
        return new SearchOrExpressionModel(
            $this->or
        );
    }

    public static function of(): SearchOrExpressionBuilder
    {
        return new self();
    }
}
