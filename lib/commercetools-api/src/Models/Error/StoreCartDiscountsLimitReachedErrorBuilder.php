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
 * @implements Builder<StoreCartDiscountsLimitReachedError>
 */
final class StoreCartDiscountsLimitReachedErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

    /**
     * <p><code>&quot;Maximum number of active cart discounts reached for $stores.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

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
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
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


    public function build(): StoreCartDiscountsLimitReachedError
    {
        return new StoreCartDiscountsLimitReachedErrorModel(
            $this->message,
            $this->stores
        );
    }

    public static function of(): StoreCartDiscountsLimitReachedErrorBuilder
    {
        return new self();
    }
}
