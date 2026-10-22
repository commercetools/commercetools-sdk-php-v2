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
final class CategoryAddStoreWithDescendantsActionModel extends JsonObjectModel implements CategoryAddStoreWithDescendantsAction
{
    public const DISCRIMINATOR_VALUE = 'addStoreWithDescendants';
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
     * <p>Value to add to the <code>stores</code> of the Category and each of its descendant Categories.</p>
     * <p>If the Store doesn't exist, a <a href="ctp:api:type:ReferencedResourceNotFoundError">ReferencedResourceNotFound</a> error is returned.</p>
     * <p>If the Category has a parent Category that is assigned to Stores and the Store isn't one of them, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     * <p>If the Category isn't assigned to any Store and one of its descendant Categories is assigned to a different Store, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
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
