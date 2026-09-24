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
 * @implements Builder<GraphQLAgentProductSearchNotEnabledError>
 */
final class GraphQLAgentProductSearchNotEnabledErrorBuilder implements Builder
{
    public function build(): GraphQLAgentProductSearchNotEnabledError
    {
        return new GraphQLAgentProductSearchNotEnabledErrorModel(
        );
    }

    public static function of(): GraphQLAgentProductSearchNotEnabledErrorBuilder
    {
        return new self();
    }
}
