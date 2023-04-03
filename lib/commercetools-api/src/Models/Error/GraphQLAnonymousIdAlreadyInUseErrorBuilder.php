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
 * @implements Builder<GraphQLAnonymousIdAlreadyInUseError>
 */
final class GraphQLAnonymousIdAlreadyInUseErrorBuilder implements Builder
{
    public function build(): GraphQLAnonymousIdAlreadyInUseError
    {
        return new GraphQLAnonymousIdAlreadyInUseErrorModel(
        );
    }

    public static function of(): GraphQLAnonymousIdAlreadyInUseErrorBuilder
    {
        return new self();
    }
}
