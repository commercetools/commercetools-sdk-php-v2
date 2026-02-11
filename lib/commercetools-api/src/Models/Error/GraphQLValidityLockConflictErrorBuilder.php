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
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifier;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLValidityLockConflictError>
 */
final class GraphQLValidityLockConflictErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sku;

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

     * @var null|RecurrencePolicyResourceIdentifier|RecurrencePolicyResourceIdentifierBuilder
     */
    private $recurrencePolicy;

    /**
     * <p>SKU for which the modification conflict occurred.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Currency code of the Standalone Price.</p>
     *

     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the Standalone Price is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> for which the Standalone Price is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p><a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a> for which the Standalone Price is valid.</p>
     *

     * @return null|RecurrencePolicyResourceIdentifier
     */
    public function getRecurrencePolicy()
    {
        return $this->recurrencePolicy instanceof RecurrencePolicyResourceIdentifierBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

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
     * @param ?RecurrencePolicyResourceIdentifier $recurrencePolicy
     * @return $this
     */
    public function withRecurrencePolicy(?RecurrencePolicyResourceIdentifier $recurrencePolicy)
    {
        $this->recurrencePolicy = $recurrencePolicy;

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

    /**
     * @deprecated use withRecurrencePolicy() instead
     * @return $this
     */
    public function withRecurrencePolicyBuilder(?RecurrencePolicyResourceIdentifierBuilder $recurrencePolicy)
    {
        $this->recurrencePolicy = $recurrencePolicy;

        return $this;
    }

    public function build(): GraphQLValidityLockConflictError
    {
        return new GraphQLValidityLockConflictErrorModel(
            $this->sku,
            $this->currency,
            $this->country,
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->recurrencePolicy instanceof RecurrencePolicyResourceIdentifierBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy
        );
    }

    public static function of(): GraphQLValidityLockConflictErrorBuilder
    {
        return new self();
    }
}
