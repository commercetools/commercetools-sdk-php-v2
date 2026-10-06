<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryAddStoreAction>
 */
final class CategoryAddStoreActionBuilder implements Builder
{
    /**

     * @var null|StoreResourceIdentifier|StoreResourceIdentifierBuilder
     */
    private $store;

    /**
     * <p>Value to add to the Category's <code>stores</code>.</p>
     * <p>When called through an <a href="#update-category-in-store">in-Store endpoint</a>, the caller must have permission for the referenced <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        return $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     * @return $this
     */
    public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    public function build(): CategoryAddStoreAction
    {
        return new CategoryAddStoreActionModel(
            $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store
        );
    }

    public static function of(): CategoryAddStoreActionBuilder
    {
        return new self();
    }
}
