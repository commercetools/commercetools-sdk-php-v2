<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Channel\ChannelReference;

class SyncInfoModel extends JsonObjectModel implements SyncInfo {
    /**
     * @var ChannelReference
     */
    protected $channel;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var \DateTimeImmutable
     */
    protected $syncedAt;

    /**
     * @return ChannelReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            $value = $this->raw(SyncInfo::FIELD_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->channel = $value;
        }
        return $this->channel;
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            $value = $this->raw(SyncInfo::FIELD_EXTERNAL_ID);
            $value = (string)$value;
            $this->externalId = $value;
        }
        return $this->externalId;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getSyncedAt()
    {
        if (is_null($this->syncedAt)) {
            $value = $this->raw(SyncInfo::FIELD_SYNCED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->syncedAt = $value;
        }
        return $this->syncedAt;
    }

    /**
     * @param ChannelReference $channel
     * @return $this
     */
    public function setChannel(ChannelReference $channel)
    {
        $this->channel = $channel;

        return $this;
    }
    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = (string)$externalId;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $syncedAt
     * @return $this
     */
    public function setSyncedAt($syncedAt)
    {
        if ($syncedAt instanceof \DateTime) {
            $syncedAt = \DateTimeImmutable::createFromMutable($syncedAt);
        }
        if (!$syncedAt instanceof \DateTimeImmutable) {
            $syncedAt = new \DateTimeImmutable($syncedAt);
        }
        $this->$syncedAt = $syncedAt;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[SyncInfo::FIELD_SYNCED_AT]) && $data[SyncInfo::FIELD_SYNCED_AT] instanceof \DateTimeImmutable) {
            $data[SyncInfo::FIELD_SYNCED_AT] = $data[SyncInfo::FIELD_SYNCED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
