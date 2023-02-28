<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetLineItemDistributionChannelAction>
 */
final class CartSetLineItemDistributionChannelActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $distributionChannel;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <ul>
     * <li>If present, a <a href="ctp:api:type:Reference">Reference</a> to the Channel is set for the <a href="ctp:api:type:LineItem">LineItem</a> specified by <code>lineItemId</code>.</li>
     * <li>If not present, the current <a href="ctp:api:type:Reference">Reference</a> to a distribution channel is removed from the <a href="ctp:api:type:LineItem">LineItem</a> specified by <code>lineItemId</code>.
     * The Channel must have the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</li>
     * </ul>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
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
     * @param ?ChannelResourceIdentifier $distributionChannel
     * @return $this
     */
    public function withDistributionChannel(?ChannelResourceIdentifier $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @deprecated use withDistributionChannel() instead
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelResourceIdentifierBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    public function build(): CartSetLineItemDistributionChannelAction
    {
        return new CartSetLineItemDistributionChannelActionModel(
            $this->lineItemId,
            $this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel
        );
    }

    public static function of(): CartSetLineItemDistributionChannelActionBuilder
    {
        return new self();
    }
}
