<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerSetStoresActionModel extends JsonObjectModel implements CustomerSetStoresAction
{
    public const DISCRIMINATOR_VALUE = 'setStores';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StoreResourceIdentifierCollection
     */
    protected $stores;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreResourceIdentifierCollection $stores = null,
        ?string $action = null
    ) {
        $this->stores = $stores;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>ResourceIdentifier of the Stores to set.</p>
     *
     *
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreResourceIdentifierCollection::fromArray($data);
        }

        return $this->stores;
    }


    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void
    {
        $this->stores = $stores;
    }
}
