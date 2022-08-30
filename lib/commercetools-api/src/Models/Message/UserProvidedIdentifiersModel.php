<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class UserProvidedIdentifiersModel extends JsonObjectModel implements UserProvidedIdentifiers
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $externalId;

    /**
     *
     * @var ?string
     */
    protected $orderNumber;

    /**
     *
     * @var ?string
     */
    protected $customerNumber;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     *
     * @var ?ContainerAndKey
     */
    protected $containerAndKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $externalId = null,
        ?string $orderNumber = null,
        ?string $customerNumber = null,
        ?string $sku = null,
        ?LocalizedString $slug = null,
        ?ContainerAndKey $containerAndKey = null
    ) {
        $this->key = $key;
        $this->externalId = $externalId;
        $this->orderNumber = $orderNumber;
        $this->customerNumber = $customerNumber;
        $this->sku = $sku;
        $this->slug = $slug;
        $this->containerAndKey = $containerAndKey;
    }

    /**
     * <p>User-provided unique identifier of the resource.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>User-provided unique identifier of the resource.</p>
     *
     *
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * <p>User-provided unique identifier of an <a href="ctp:api:type:Order">Order</a>.</p>
     *
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->orderNumber = (string) $data;
        }

        return $this->orderNumber;
    }

    /**
     * <p>User-provided unique identifier of a <a href="ctp:api:type:Customer">Customer</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerNumber()
    {
        if (is_null($this->customerNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->customerNumber = (string) $data;
        }

        return $this->customerNumber;
    }

    /**
     * <p>Unique SKU of a <a href="ctp:api:type:ProductVariant">Product Variant</a>.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>Unique identifier usually used in deep-link URLs for a <a href="ctp:api:type:Product">Product</a>. The value corresponds to the slug in the <code>current</code> <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * <p>Unique identifier of a <a href="/../api/projects/custom-objects">Custom Object</a>.</p>
     *
     *
     * @return null|ContainerAndKey
     */
    public function getContainerAndKey()
    {
        if (is_null($this->containerAndKey)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CONTAINER_AND_KEY);
            if (is_null($data)) {
                return null;
            }

            $this->containerAndKey = ContainerAndKeyModel::of($data);
        }

        return $this->containerAndKey;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?ContainerAndKey $containerAndKey
     */
    public function setContainerAndKey(?ContainerAndKey $containerAndKey): void
    {
        $this->containerAndKey = $containerAndKey;
    }
}
