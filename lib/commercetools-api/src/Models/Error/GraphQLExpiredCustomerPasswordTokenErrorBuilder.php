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
 * @implements Builder<GraphQLExpiredCustomerPasswordTokenError>
 */
final class GraphQLExpiredCustomerPasswordTokenErrorBuilder implements Builder
{
    public function build(): GraphQLExpiredCustomerPasswordTokenError
    {
        return new GraphQLExpiredCustomerPasswordTokenErrorModel(
        );
    }

    public static function of(): GraphQLExpiredCustomerPasswordTokenErrorBuilder
    {
        return new self();
    }
}
