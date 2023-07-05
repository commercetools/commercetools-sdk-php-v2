<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLStoreCartDiscountsLimitReachedError>
 */
final class GraphQLStoreCartDiscountsLimitReachedErrorBuilder implements Builder
{
    /**

     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

    /**
     * <p>Stores for which the limit for active Cart Discounts that can exist has been reached.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @param ?StoreKeyReferenceCollection $stores
     * @return $this
     */
    public function withStores(?StoreKeyReferenceCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }


    public function build(): GraphQLStoreCartDiscountsLimitReachedError
    {
        return new GraphQLStoreCartDiscountsLimitReachedErrorModel(
            $this->stores
        );
    }

    public static function of(): GraphQLStoreCartDiscountsLimitReachedErrorBuilder
    {
        return new self();
    }
}
