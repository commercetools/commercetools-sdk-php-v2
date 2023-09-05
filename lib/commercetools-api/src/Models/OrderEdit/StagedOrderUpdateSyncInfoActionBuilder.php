<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<StagedOrderUpdateSyncInfoAction>
 */
final class StagedOrderUpdateSyncInfoActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $externalId;

    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $channel;

    /**

     * @var ?DateTimeImmutable
     */
    private $syncedAt;

    /**
     * <p>Set this to identify an external order instance, file, or other resource.</p>
     *

     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * <p>The synchronization destination to set. Must not be empty.
     * The referenced Channel must have the <a href="ctp:api:type:ChannelRoleEnum">Channel Role</a> <code>OrderExport</code> or <code>OrderImport</code>.
     * Otherwise this update action returns an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>If not set, it defaults to the current date and time.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getSyncedAt()
    {
        return $this->syncedAt;
    }

    /**
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

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
     * @param ?DateTimeImmutable $syncedAt
     * @return $this
     */
    public function withSyncedAt(?DateTimeImmutable $syncedAt)
    {
        $this->syncedAt = $syncedAt;

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

    public function build(): StagedOrderUpdateSyncInfoAction
    {
        return new StagedOrderUpdateSyncInfoActionModel(
            $this->externalId,
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->syncedAt
        );
    }

    public static function of(): StagedOrderUpdateSyncInfoActionBuilder
    {
        return new self();
    }
}
