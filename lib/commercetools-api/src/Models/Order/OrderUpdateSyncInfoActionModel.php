<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class OrderUpdateSyncInfoActionModel extends JsonObjectModel implements OrderUpdateSyncInfoAction
{
    public const DISCRIMINATOR_VALUE = 'updateSyncInfo';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $externalId;

    /**
     *
     * @var ?ChannelResourceIdentifier
     */
    protected $channel;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $syncedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $externalId = null,
        ?ChannelResourceIdentifier $channel = null,
        ?DateTimeImmutable $syncedAt = null,
        ?string $action = null
    ) {
        $this->externalId = $externalId;
        $this->channel = $channel;
        $this->syncedAt = $syncedAt;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Set this to identify an external order instance, file, or other resource.</p>
     *
     *
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * <p>The synchronization destination to set. Must not be empty.
     * The referenced Channel must have the <a href="ctp:api:type:ChannelRoleEnum">Channel Role</a> <code>OrderExport</code> or <code>OrderImport</code>.
     * Otherwise this update action returns an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error.</p>
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
     * <p>If not set, it defaults to the current date and time.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getSyncedAt()
    {
        if (is_null($this->syncedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SYNCED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->syncedAt = $data;
        }

        return $this->syncedAt;
    }


    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @param ?DateTimeImmutable $syncedAt
     */
    public function setSyncedAt(?DateTimeImmutable $syncedAt): void
    {
        $this->syncedAt = $syncedAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderUpdateSyncInfoAction::FIELD_SYNCED_AT]) && $data[OrderUpdateSyncInfoAction::FIELD_SYNCED_AT] instanceof \DateTimeImmutable) {
            $data[OrderUpdateSyncInfoAction::FIELD_SYNCED_AT] = $data[OrderUpdateSyncInfoAction::FIELD_SYNCED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
