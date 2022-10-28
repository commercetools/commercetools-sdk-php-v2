<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitStoreModeChangedMessagePayloadModel extends JsonObjectModel implements BusinessUnitStoreModeChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitStoreModeChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?StoreKeyReferenceCollection
     */
    protected $stores;

    /**
     *
     * @var ?string
     */
    protected $storeMode;

    /**
     *
     * @var ?StoreKeyReferenceCollection
     */
    protected $oldStores;

    /**
     *
     * @var ?string
     */
    protected $oldStoreMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreKeyReferenceCollection $stores = null,
        ?string $storeMode = null,
        ?StoreKeyReferenceCollection $oldStores = null,
        ?string $oldStoreMode = null,
        ?string $type = null
    ) {
        $this->stores = $stores;
        $this->storeMode = $storeMode;
        $this->oldStores = $oldStores;
        $this->oldStoreMode = $oldStoreMode;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *
     *
     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreKeyReferenceCollection::fromArray($data);
        }

        return $this->stores;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitStoreMode">BusinessUnitStoreMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
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
     * <p><a href="ctp:api:type:Store">Stores</a> of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *
     *
     * @return null|StoreKeyReferenceCollection
     */
    public function getOldStores()
    {
        if (is_null($this->oldStores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OLD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->oldStores = StoreKeyReferenceCollection::fromArray($data);
        }

        return $this->oldStores;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitStoreMode">BusinessUnitStoreMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldStoreMode()
    {
        if (is_null($this->oldStoreMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_STORE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->oldStoreMode = (string) $data;
        }

        return $this->oldStoreMode;
    }


    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void
    {
        $this->stores = $stores;
    }

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void
    {
        $this->storeMode = $storeMode;
    }

    /**
     * @param ?StoreKeyReferenceCollection $oldStores
     */
    public function setOldStores(?StoreKeyReferenceCollection $oldStores): void
    {
        $this->oldStores = $oldStores;
    }

    /**
     * @param ?string $oldStoreMode
     */
    public function setOldStoreMode(?string $oldStoreMode): void
    {
        $this->oldStoreMode = $oldStoreMode;
    }
}
