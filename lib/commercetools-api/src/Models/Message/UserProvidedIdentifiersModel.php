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
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?string
     */
    protected $orderNumber;

    /**
     * @var ?string
     */
    protected $customerNumber;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?LocalizedString
     */
    protected $slug;


    public function __construct(
        string $key = null,
        string $externalId = null,
        string $orderNumber = null,
        string $customerNumber = null,
        string $sku = null,
        LocalizedString $slug = null
    ) {
        $this->key = $key;
        $this->externalId = $externalId;
        $this->orderNumber = $orderNumber;
        $this->customerNumber = $customerNumber;
        $this->sku = $sku;
        $this->slug = $slug;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UserProvidedIdentifiers::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UserProvidedIdentifiers::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * @return null|string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UserProvidedIdentifiers::FIELD_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->orderNumber = (string) $data;
        }

        return $this->orderNumber;
    }

    /**
     * @return null|string
     */
    public function getCustomerNumber()
    {
        if (is_null($this->customerNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UserProvidedIdentifiers::FIELD_CUSTOMER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->customerNumber = (string) $data;
        }

        return $this->customerNumber;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UserProvidedIdentifiers::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(UserProvidedIdentifiers::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
}
