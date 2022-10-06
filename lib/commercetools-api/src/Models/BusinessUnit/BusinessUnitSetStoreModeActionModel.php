<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitSetStoreModeActionModel extends JsonObjectModel implements BusinessUnitSetStoreModeAction
{
    public const DISCRIMINATOR_VALUE = 'setStoreMode';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $storeMode;

    /**
     *
     * @var ?StoreResourceIdentifierCollection
     */
    protected $stores;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $storeMode = null,
        ?StoreResourceIdentifierCollection $stores = null,
        ?string $action = null
    ) {
        $this->storeMode = $storeMode;
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
     * <p>Set to <code>Explicit</code> to specify Stores for the Business Unit. Set to <code>FromParent</code> to inherit Stores from a parent.</p>
     *
     *
     * @return null|string
     */
    public function getStoreMode()
    {
        if (is_null($this->storeMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STORE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->storeMode = (string) $data;
        }

        return $this->storeMode;
    }

    /**
     * <p>Set the <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Can only be set if <code>storeMode</code> is <code>Explicit</code>.</p>
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
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void
    {
        $this->storeMode = $storeMode;
    }

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void
    {
        $this->stores = $stores;
    }
}
