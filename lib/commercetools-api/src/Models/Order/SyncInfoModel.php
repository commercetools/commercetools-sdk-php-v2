<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class SyncInfoModel extends JsonObjectModel implements SyncInfo
{
    /**
     * @var ?ChannelReference
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
        ChannelReference $channel = null,
        string $externalId = null,
        DateTimeImmutable $syncedAt = null
    ) {
        $this->channel = $channel;
        $this->externalId = $externalId;
        $this->syncedAt = $syncedAt;
    }

    /**
     * <p>Connection to a particular synchronization destination.</p>.
     *
     * @return null|ChannelReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(SyncInfo::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * <p>Can be used to reference an external order instance, file etc.</p>.
     *
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SyncInfo::FIELD_EXTERNAL_ID);
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
            $data = $this->raw(SyncInfo::FIELD_SYNCED_AT);
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

    public function setChannel(?ChannelReference $channel): void
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
        if (isset($data[SyncInfo::FIELD_SYNCED_AT]) && $data[SyncInfo::FIELD_SYNCED_AT] instanceof \DateTimeImmutable) {
            $data[SyncInfo::FIELD_SYNCED_AT] = $data[SyncInfo::FIELD_SYNCED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
