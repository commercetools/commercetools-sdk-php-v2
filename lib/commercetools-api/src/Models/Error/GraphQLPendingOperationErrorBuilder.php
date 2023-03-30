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
 * @implements Builder<GraphQLPendingOperationError>
 */
final class GraphQLPendingOperationErrorBuilder implements Builder
{
    public function build(): GraphQLPendingOperationError
    {
        return new GraphQLPendingOperationErrorModel(
        );
    }

    public static function of(): GraphQLPendingOperationErrorBuilder
    {
        return new self();
    }
}
