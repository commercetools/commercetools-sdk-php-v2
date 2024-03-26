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
 * @implements Builder<SearchNotExpression>
 */
final class SearchNotExpressionBuilder implements Builder
{
    /**

     * @var ?SearchQueryCollection
     */
    private $not;

    /**

     * @return null|SearchQueryCollection
     */
    public function getNot()
    {
        return $this->not;
    }

    /**
     * @param ?SearchQueryCollection $not
     * @return $this
     */
    public function withNot(?SearchQueryCollection $not)
    {
        $this->not = $not;

        return $this;
    }


    public function build(): SearchNotExpression
    {
        return new SearchNotExpressionModel(
            $this->not
        );
    }

    public static function of(): SearchNotExpressionBuilder
    {
        return new self();
    }
}
