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
 * @implements Builder<GraphQLExtensionDependencyExistsError>
 */
final class GraphQLExtensionDependencyExistsErrorBuilder implements Builder
{
    public function build(): GraphQLExtensionDependencyExistsError
    {
        return new GraphQLExtensionDependencyExistsErrorModel(
        );
    }

    public static function of(): GraphQLExtensionDependencyExistsErrorBuilder
    {
        return new self();
    }
}
