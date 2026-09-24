<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\GraphQLErrorObject;
use Commercetools\Api\Models\Error\GraphQLErrorObjectBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLAgentBusinessUnitAmbiguousError>
 */
final class GraphQLAgentBusinessUnitAmbiguousErrorBuilder implements Builder
{
    public function build(): GraphQLAgentBusinessUnitAmbiguousError
    {
        return new GraphQLAgentBusinessUnitAmbiguousErrorModel(
        );
    }

    public static function of(): GraphQLAgentBusinessUnitAmbiguousErrorBuilder
    {
        return new self();
    }
}
