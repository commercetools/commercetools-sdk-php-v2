<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLValidityLockConflictError extends GraphQLErrorObject
{
    public const FIELD_SKU = 'sku';
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_RECURRENCE_POLICY = 'recurrencePolicy';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>SKU for which the modification conflict occurred.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Currency code of the Standalone Price.</p>
     *

     * @return null|string
     */
    public function getCurrency();

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the Standalone Price is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> for which the Standalone Price is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * <p><a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a> for which the Standalone Price is valid.</p>
     *

     * @return null|RecurrencePolicyResourceIdentifier
     */
    public function getRecurrencePolicy();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $currency
     */
    public function setCurrency(?string $currency): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void;

    /**
     * @param ?RecurrencePolicyResourceIdentifier $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyResourceIdentifier $recurrencePolicy): void;
}
