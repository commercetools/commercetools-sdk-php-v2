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
 * @implements Builder<GraphQLUnauthorizedError>
 */
final class GraphQLUnauthorizedErrorBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $storesWithoutPermission;

    /**
     * <p>Keys of <a href="ctp:api:type:Store">Stores</a> for which the required permission to modify is missing.</p>
     * <p>This field is returned only for <a href="ctp:api:type:CartDiscount">Cart Discounts</a>.</p>
     *

     * @return null|array
     */
    public function getStoresWithoutPermission()
    {
        return $this->storesWithoutPermission;
    }

    /**
     * @param ?array $storesWithoutPermission
     * @return $this
     */
    public function withStoresWithoutPermission(?array $storesWithoutPermission)
    {
        $this->storesWithoutPermission = $storesWithoutPermission;

        return $this;
    }


    public function build(): GraphQLUnauthorizedError
    {
        return new GraphQLUnauthorizedErrorModel(
            $this->storesWithoutPermission
        );
    }

    public static function of(): GraphQLUnauthorizedErrorBuilder
    {
        return new self();
    }
}
