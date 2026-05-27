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
 * @implements Builder<GraphQLMissingDependencyError>
 */
final class GraphQLMissingDependencyErrorBuilder implements Builder
{
    public function build(): GraphQLMissingDependencyError
    {
        return new GraphQLMissingDependencyErrorModel(
        );
    }

    public static function of(): GraphQLMissingDependencyErrorBuilder
    {
        return new self();
    }
}
