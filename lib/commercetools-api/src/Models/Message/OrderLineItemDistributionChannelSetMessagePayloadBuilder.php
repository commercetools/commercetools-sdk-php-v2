<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderLineItemDistributionChannelSetMessagePayload>
 */
final class OrderLineItemDistributionChannelSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var null|ChannelReference|ChannelReferenceBuilder
     */
    private $distributionChannel;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p><a href="ctp:api:type:Channel">Distribution Channel</a> that was set.</p>
     *

     * @return null|ChannelReference
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?ChannelReference $distributionChannel
     * @return $this
     */
    public function withDistributionChannel(?ChannelReference $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @deprecated use withDistributionChannel() instead
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelReferenceBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    public function build(): OrderLineItemDistributionChannelSetMessagePayload
    {
        return new OrderLineItemDistributionChannelSetMessagePayloadModel(
            $this->lineItemId,
            $this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel
        );
    }

    public static function of(): OrderLineItemDistributionChannelSetMessagePayloadBuilder
    {
        return new self();
    }
}
