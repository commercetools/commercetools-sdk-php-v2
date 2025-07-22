<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLTooManyRequestsError>
 */
final class GraphQLTooManyRequestsErrorBuilder implements Builder
{




    public function build(): GraphQLTooManyRequestsError
    {
        return new GraphQLTooManyRequestsErrorModel(
        );
    }

    public static function of(): GraphQLTooManyRequestsErrorBuilder
    {
        return new self();
    }
}
