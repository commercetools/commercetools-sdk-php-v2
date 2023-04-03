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
 * @implements Builder<GraphQLFeatureRemovedError>
 */
final class GraphQLFeatureRemovedErrorBuilder implements Builder
{
    public function build(): GraphQLFeatureRemovedError
    {
        return new GraphQLFeatureRemovedErrorModel(
        );
    }

    public static function of(): GraphQLFeatureRemovedErrorBuilder
    {
        return new self();
    }
}
