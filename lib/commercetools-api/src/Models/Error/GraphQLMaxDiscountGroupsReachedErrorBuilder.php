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
 * @implements Builder<GraphQLMaxDiscountGroupsReachedError>
 */
final class GraphQLMaxDiscountGroupsReachedErrorBuilder implements Builder
{
    public function build(): GraphQLMaxDiscountGroupsReachedError
    {
        return new GraphQLMaxDiscountGroupsReachedErrorModel(
        );
    }

    public static function of(): GraphQLMaxDiscountGroupsReachedErrorBuilder
    {
        return new self();
    }
}
