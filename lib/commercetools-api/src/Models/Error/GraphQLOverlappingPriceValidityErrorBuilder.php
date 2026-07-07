<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<GraphQLOverlappingPriceValidityError>
 */
final class GraphQLOverlappingPriceValidityErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $conflictingPrice;

    /**

     * @var ?string
     */
    private $currency;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var null|CustomerGroupResourceIdentifier|CustomerGroupResourceIdentifierBuilder
     */
    private $customerGroup;

    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $channel;

    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**

     * @var ?DateTimeImmutable
     */
    private $conflictingValidFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $conflictingValidUntil;

    /**
     * <p>Unique identifier of the conflicting Embedded Price.</p>
     *

     * @return null|string
     */
    public function getConflictingPrice()
    {
        return $this->conflictingPrice;
    }

    /**
     * <p>Currency code of the Price.</p>
     *

     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <p>Country code of the Price.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the Price is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> for which the Price is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>Date and time (UTC) from which the Embedded Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Date and time (UTC) until which the Embedded Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Date and time (UTC) from which the conflicting Embedded Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getConflictingValidFrom()
    {
        return $this->conflictingValidFrom;
    }

    /**
     * <p>Date and time (UTC) until which the conflicting Embedded Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getConflictingValidUntil()
    {
        return $this->conflictingValidUntil;
    }

    /**
     * @param ?string $conflictingPrice
     * @return $this
     */
    public function withConflictingPrice(?string $conflictingPrice)
    {
        $this->conflictingPrice = $conflictingPrice;

        return $this;
    }

    /**
     * @param ?string $currency
     * @return $this
     */
    public function withCurrency(?string $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?ChannelResourceIdentifier $channel
     * @return $this
     */
    public function withChannel(?ChannelResourceIdentifier $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $conflictingValidFrom
     * @return $this
     */
    public function withConflictingValidFrom(?DateTimeImmutable $conflictingValidFrom)
    {
        $this->conflictingValidFrom = $conflictingValidFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $conflictingValidUntil
     * @return $this
     */
    public function withConflictingValidUntil(?DateTimeImmutable $conflictingValidUntil)
    {
        $this->conflictingValidUntil = $conflictingValidUntil;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withChannel() instead
     * @return $this
     */
    public function withChannelBuilder(?ChannelResourceIdentifierBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    public function build(): GraphQLOverlappingPriceValidityError
    {
        return new GraphQLOverlappingPriceValidityErrorModel(
            $this->conflictingPrice,
            $this->currency,
            $this->country,
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->validFrom,
            $this->validUntil,
            $this->conflictingValidFrom,
            $this->conflictingValidUntil
        );
    }

    public static function of(): GraphQLOverlappingPriceValidityErrorBuilder
    {
        return new self();
    }
}
