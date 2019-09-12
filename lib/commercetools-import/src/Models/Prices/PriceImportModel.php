<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceModel;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyModel;
use DateTimeImmutable;
use stdClass;

final class PriceImportModel extends JsonObjectModel implements PriceImport
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?ImportReference
     */
    protected $productVariant;

    /**
     * @var ?ImportReference
     */
    protected $customerGroup;

    /**
     * @var ?ImportReference
     */
    protected $channel;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?Money
     */
    protected $value;

    public function __construct(
        string $key = null,
        string $country = null,
        ImportReference $productVariant = null,
        ImportReference $customerGroup = null,
        ImportReference $channel = null,
        DateTimeImmutable $validUntil = null,
        DateTimeImmutable $validFrom = null,
        Money $value = null
    ) {
        $this->key = $key;
        $this->country = $country;
        $this->productVariant = $productVariant;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->validUntil = $validUntil;
        $this->validFrom = $validFrom;
        $this->value = $value;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportResource::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceImport::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>The product variant in which this price is contained.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductVariant()
    {
        if (is_null($this->productVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_PRODUCT_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->productVariant = ImportReferenceModel::of($data);
        }

        return $this->productVariant;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = ImportReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ImportReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceImport::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceImport::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setProductVariant(?ImportReference $productVariant): void
    {
        $this->productVariant = $productVariant;
    }

    public function setCustomerGroup(?ImportReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setChannel(?ImportReference $channel): void
    {
        $this->channel = $channel;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[PriceImport::FIELD_VALID_UNTIL]) && $data[PriceImport::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[PriceImport::FIELD_VALID_UNTIL] = $data[PriceImport::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[PriceImport::FIELD_VALID_FROM]) && $data[PriceImport::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[PriceImport::FIELD_VALID_FROM] = $data[PriceImport::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
