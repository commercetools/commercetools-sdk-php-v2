<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLSearchFacetPathNotFoundError>
 */
final class GraphQLSearchFacetPathNotFoundErrorBuilder implements Builder
{
    public function build(): GraphQLSearchFacetPathNotFoundError
    {
        return new GraphQLSearchFacetPathNotFoundErrorModel(
        );
    }

    public static function of(): GraphQLSearchFacetPathNotFoundErrorBuilder
    {
        return new self();
    }
}
