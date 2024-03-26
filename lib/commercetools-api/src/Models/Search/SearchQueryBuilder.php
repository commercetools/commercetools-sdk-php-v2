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
 * @implements Builder<SearchQuery>
 */
final class SearchQueryBuilder implements Builder
{
    public function build(): SearchQuery
    {
        return new SearchQueryModel(
        );
    }

    public static function of(): SearchQueryBuilder
    {
        return new self();
    }
}
