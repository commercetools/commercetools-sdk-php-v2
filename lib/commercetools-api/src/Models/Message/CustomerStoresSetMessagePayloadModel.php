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
final class CustomerStoresSetMessagePayloadModel extends JsonObjectModel implements CustomerStoresSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerStoresSet';
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
     * @var ?StoreKeyReferenceCollection
     */
    protected $oldStores;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreKeyReferenceCollection $stores = null,
        ?StoreKeyReferenceCollection $oldStores = null,
        ?string $type = null
    ) {
        $this->stores = $stores;
        $this->oldStores = $oldStores;
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
     * <p>The <a href="ctp:api:type:Store">Stores</a> the <a href="ctp:api:type:Customer">Customer</a> is associated with after the <a href="ctp:api:type:CustomerSetStoresAction">Set Stores</a> update action.</p>
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
     * <p>The <a href="ctp:api:type:Store">Stores</a> the <a href="ctp:api:type:Customer">Customer</a> was associated with before the <a href="ctp:api:type:CustomerSetStoresAction">Set Stores</a> update action.</p>
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
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void
    {
        $this->stores = $stores;
    }

    /**
     * @param ?StoreKeyReferenceCollection $oldStores
     */
    public function setOldStores(?StoreKeyReferenceCollection $oldStores): void
    {
        $this->oldStores = $oldStores;
    }
}
