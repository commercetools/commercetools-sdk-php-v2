<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ChannelKeyReference;

use Commercetools\Import\Models\Common\ChannelKeyReferenceModel;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceModel;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyModel;
use DateTimeImmutable;
use DateTimeImmutableModel;
use stdClass;

/**
 * @internal
 */
final class PriceDraftImportModel extends JsonObjectModel implements PriceDraftImport
{
    /**
     * @var ?Money
     */
    protected $value;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?CustomerGroupKeyReference
     */
    protected $customerGroup;

    /**
     * @var ?ChannelKeyReference
     */
    protected $channel;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;


    public function __construct(
        Money $value = null,
        string $country = null,
        CustomerGroupKeyReference $customerGroup = null,
        ChannelKeyReference $channel = null,
        DateTimeImmutable $validFrom = null,
        DateTimeImmutable $validUntil = null
    ) {
        $this->value = $value;
        $this->country = $country;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceDraftImport::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceDraftImport::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>References a customer group by its key.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceDraftImport::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupKeyReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>References a channel by its key.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceDraftImport::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelKeyReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceDraftImport::FIELD_VALID_FROM);
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
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceDraftImport::FIELD_VALID_UNTIL);
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

    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setChannel(?ChannelKeyReference $channel): void
    {
        $this->channel = $channel;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[PriceDraftImport::FIELD_VALID_FROM]) && $data[PriceDraftImport::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[PriceDraftImport::FIELD_VALID_FROM] = $data[PriceDraftImport::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[PriceDraftImport::FIELD_VALID_UNTIL]) && $data[PriceDraftImport::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[PriceDraftImport::FIELD_VALID_UNTIL] = $data[PriceDraftImport::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
