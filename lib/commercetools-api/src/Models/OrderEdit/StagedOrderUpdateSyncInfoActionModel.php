<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class StagedOrderUpdateSyncInfoActionModel extends JsonObjectModel implements StagedOrderUpdateSyncInfoAction
{
    const DISCRIMINATOR_VALUE = 'updateSyncInfo';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $channel;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $syncedAt;

    public function __construct(
        string $action = null,
        ChannelResourceIdentifier $channel = null,
        string $externalId = null,
        DateTimeImmutable $syncedAt = null
    ) {
        $this->action = $action;
        $this->channel = $channel;
        $this->externalId = $externalId;
        $this->syncedAt = $syncedAt;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderUpdateSyncInfoAction::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->channel;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateSyncInfoAction::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getSyncedAt()
    {
        if (is_null($this->syncedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateSyncInfoAction::FIELD_SYNCED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->syncedAt = $data;
        }

        return $this->syncedAt;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setChannel(?ChannelResourceIdentifier $channel): void
    {
        $this->channel = $channel;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    public function setSyncedAt(?DateTimeImmutable $syncedAt): void
    {
        $this->syncedAt = $syncedAt;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[StagedOrderUpdateSyncInfoAction::FIELD_SYNCED_AT]) && $data[StagedOrderUpdateSyncInfoAction::FIELD_SYNCED_AT] instanceof \DateTimeImmutable) {
            $data[StagedOrderUpdateSyncInfoAction::FIELD_SYNCED_AT] = $data[StagedOrderUpdateSyncInfoAction::FIELD_SYNCED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
