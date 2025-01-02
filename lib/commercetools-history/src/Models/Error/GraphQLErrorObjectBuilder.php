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
 * @implements Builder<GraphQLErrorObject>
 */
final class GraphQLErrorObjectBuilder implements Builder
{




    public function build(): GraphQLErrorObject
    {
        return new GraphQLErrorObjectModel(
        );
    }

    public static function of(): GraphQLErrorObjectBuilder
    {
        return new self();
    }
}
