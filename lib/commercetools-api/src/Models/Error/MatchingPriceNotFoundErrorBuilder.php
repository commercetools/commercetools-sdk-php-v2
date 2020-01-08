<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<MatchingPriceNotFoundError>
 */
final class MatchingPriceNotFoundErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $productId;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $currency;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var CustomerGroupReference|?CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var ChannelReference|?ChannelReferenceBuilder
     */
    private $channel;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * @return null|ChannelReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductId(?string $productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrency(?string $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannel(?ChannelReference $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelBuilder(?ChannelReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    public function build(): MatchingPriceNotFoundError
    {
        return new MatchingPriceNotFoundErrorModel(
            $this->message,
            $this->productId,
            $this->variantId,
            $this->currency,
            $this->country,
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel)
        );
    }

    public static function of(): MatchingPriceNotFoundErrorBuilder
    {
        return new self();
    }
}
