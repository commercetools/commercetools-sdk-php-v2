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
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReference;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class GraphQLExactLockConflictErrorModel extends JsonObjectModel implements GraphQLExactLockConflictError
{
    public const DISCRIMINATOR_VALUE = 'ExactLockConflict';
    /**
     *
     * @var ?string
     */
    protected $code;

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
     *
     * @var ?RecurrencePolicyReference
     */
    protected $recurrencePolicy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $sku = null,
        ?string $currency = null,
        ?string $country = null,
        ?CustomerGroupResourceIdentifier $customerGroup = null,
        ?ChannelResourceIdentifier $channel = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?RecurrencePolicyReference $recurrencePolicy = null,
        ?string $code = null
    ) {
        $this->sku = $sku;
        $this->currency = $currency;
        $this->country = $country;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->recurrencePolicy = $recurrencePolicy;
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
     * <p>SKU for which the modification conflict occurred.</p>
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
     * <p>Currency code of the Standalone Price.</p>
     *
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
     * <p>Country code of the geographic location.</p>
     *
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
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the Standalone Price is valid.</p>
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
     * <p><a href="ctp:api:type:Channel">Channel</a> for which the Standalone Price is valid.</p>
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
     * <p>Date and time (UTC) from which the Standalone Price is valid.</p>
     *
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
     * <p>Date and time (UTC) until which the Standalone Price is valid.</p>
     *
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
     * <p><a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a> that applies to the Standalone Price.</p>
     *
     *
     * @return null|RecurrencePolicyReference
     */
    public function getRecurrencePolicy()
    {
        if (is_null($this->recurrencePolicy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRENCE_POLICY);
            if (is_null($data)) {
                return null;
            }

            $this->recurrencePolicy = RecurrencePolicyReferenceModel::of($data);
        }

        return $this->recurrencePolicy;
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
     * @param ?RecurrencePolicyReference $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyReference $recurrencePolicy): void
    {
        $this->recurrencePolicy = $recurrencePolicy;
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
        if (isset($data[GraphQLExactLockConflictError::FIELD_VALID_FROM]) && $data[GraphQLExactLockConflictError::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[GraphQLExactLockConflictError::FIELD_VALID_FROM] = $data[GraphQLExactLockConflictError::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[GraphQLExactLockConflictError::FIELD_VALID_UNTIL]) && $data[GraphQLExactLockConflictError::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[GraphQLExactLockConflictError::FIELD_VALID_UNTIL] = $data[GraphQLExactLockConflictError::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
