<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQL;

use Commercetools\Base\Builder;

/**
 * @implements Builder<GraphQLVariablesMap>
 */
final class GraphQLVariablesMapBuilder implements Builder
{
    public function build(): GraphQLVariablesMap
    {
        return new GraphQLVariablesMapModel(
        );
    }

    public static function of(): GraphQLVariablesMapBuilder
    {
        return new self();
    }
}
