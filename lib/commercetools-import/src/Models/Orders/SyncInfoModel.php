<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceModel;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class SyncInfoModel extends JsonObjectModel implements SyncInfo
{
    /**
     * @var ?ChannelKeyReference
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


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ChannelKeyReference $channel = null,
        ?string $externalId = null,
        ?DateTimeImmutable $syncedAt = null
    ) {
        $this->channel = $channel;
        $this->externalId = $externalId;
        $this->syncedAt = $syncedAt;
    }

    /**
     * <p>Maps to <code>SyncInfo.channel</code></p>
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelKeyReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * <p>Maps to <code>SyncInfo.externalId</code></p>
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
     * <p>Maps to <code>SyncInfo.syncedAt</code></p>
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
     * @param ?ChannelKeyReference $channel
     */
    public function setChannel(?ChannelKeyReference $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @param ?DateTimeImmutable $syncedAt
     */
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
