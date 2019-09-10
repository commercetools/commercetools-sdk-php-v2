<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<Price>
 */
final class PriceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DiscountedPriceBuilder|DiscountedPrice
     */
    protected $discounted;
    
    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?PriceTierCollection
     */
    protected $tiers;
    
    /**
     * @var ?CustomerGroupReferenceBuilder|CustomerGroupReference
     */
    protected $customerGroup;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
     */
    protected $custom;
    
    /**
     * @var ?ChannelReferenceBuilder|ChannelReference
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
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $value;

    /**
     *
     * @return DiscountedPrice|null
     */
    final public function getDiscounted()
    {
       return ($this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted);
    }
    
    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     * @return string|null
     */
    final public function getCountry()
    {
       return $this->country;
    }
    
    /**
     *
     * @return PriceTierCollection|null
     */
    final public function getTiers()
    {
       return $this->tiers;
    }
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    final public function getCustomerGroup()
    {
       return ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup);
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return ChannelReference|null
     */
    final public function getChannel()
    {
       return ($this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel);
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidUntil()
    {
       return $this->validUntil;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidFrom()
    {
       return $this->validFrom;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getValue()
    {
       return ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value);
    }
    /**
     * @return $this
     */
    final public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCountry(?string $country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTiers(?PriceTierCollection $tiers)
    {
        $this->tiers = $tiers;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withChannel(?ChannelReference $channel)
    {
        $this->channel = $channel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?Money $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withChannelBuilder(?ChannelReferenceBuilder $channel)
    {
        $this->channel = $channel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): Price {
        return new PriceModel(
            ($this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted),
            $this->country,
            $this->tiers,
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            ($this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel),
            $this->validUntil,
            $this->validFrom,
            $this->id,
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): PriceBuilder
    {
        return new self();
    }
}