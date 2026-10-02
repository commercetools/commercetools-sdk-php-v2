<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CategoryAddStoreActionModel extends JsonObjectModel implements CategoryAddStoreAction
{
    public const DISCRIMINATOR_VALUE = 'addStore';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StoreResourceIdentifier
     */
    protected $store;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreResourceIdentifier $store = null,
        ?string $action = null
    ) {
        $this->store = $store;
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
     * <p>Value to add to the Category's <code>stores</code>.</p>
     * <p>When called through an <a href="#update-category-in-store">in-Store endpoint</a>, the caller must have permission for the referenced <a href="ctp:api:type:Store">Store</a>.</p>
     *
     *
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreResourceIdentifierModel::of($data);
        }

        return $this->store;
    }


    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void
    {
        $this->store = $store;
    }
}
