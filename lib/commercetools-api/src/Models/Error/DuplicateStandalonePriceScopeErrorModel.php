<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceReference;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class DuplicateStandalonePriceScopeErrorModel extends JsonObjectModel implements DuplicateStandalonePriceScopeError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateStandalonePriceScope';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?StandalonePriceReference
     */
    protected $conflictingStandalonePrice;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?string
     */
    protected $currency;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

    /**
     *
     * @var ?ChannelResourceIdentifier
     */
    protected $channel;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validUntil;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?StandalonePriceReference $conflictingStandalonePrice = null,
        ?string $sku = null,
        ?string $currency = null,
        ?string $country = null,
        ?CustomerGroupResourceIdentifier $customerGroup = null,
        ?ChannelResourceIdentifier $channel = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->conflictingStandalonePrice = $conflictingStandalonePrice;
        $this->sku = $sku;
        $this->currency = $currency;
        $this->country = $country;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *
     *
     * @return null|StandalonePriceReference
     */
    public function getConflictingStandalonePrice()
    {
        if (is_null($this->conflictingStandalonePrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CONFLICTING_STANDALONE_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->conflictingStandalonePrice = StandalonePriceReferenceModel::of($data);
        }

        return $this->conflictingStandalonePrice;
    }

    /**
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
     *
     * @return null|string
     */
    public function getCurrency()
    {
        if (is_null($this->currency)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CURRENCY);
            if (is_null($data)) {
                return null;
            }
            $this->currency = (string) $data;
        }

        return $this->currency;
    }

    /**
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *
     *
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupResourceIdentifierModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->channel;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_FROM);
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
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_UNTIL);
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
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?StandalonePriceReference $conflictingStandalonePrice
     */
    public function setConflictingStandalonePrice(?StandalonePriceReference $conflictingStandalonePrice): void
    {
        $this->conflictingStandalonePrice = $conflictingStandalonePrice;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?string $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DuplicateStandalonePriceScopeError::FIELD_VALID_FROM]) && $data[DuplicateStandalonePriceScopeError::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DuplicateStandalonePriceScopeError::FIELD_VALID_FROM] = $data[DuplicateStandalonePriceScopeError::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DuplicateStandalonePriceScopeError::FIELD_VALID_UNTIL]) && $data[DuplicateStandalonePriceScopeError::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[DuplicateStandalonePriceScopeError::FIELD_VALID_UNTIL] = $data[DuplicateStandalonePriceScopeError::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
