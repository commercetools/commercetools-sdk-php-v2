<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class SyncInfoModel extends JsonObjectModel implements SyncInfo
{
    
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

    /**
     *
     * @return ChannelReference|null
     */
    final public function getChannel()
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
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       if (is_null($this->externalId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SyncInfo::FIELD_EXTERNAL_ID);
           if (is_null($data)) {
               return null;
           }
           $this->externalId = (string)$data;
       }
       return $this->externalId;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getSyncedAt()
    {
       if (is_null($this->syncedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SyncInfo::FIELD_SYNCED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->syncedAt = $data;
       }
       return $this->syncedAt;
    }
    final public function setChannel(?ChannelReference $channel): void
    {
        $this->channel = $channel;
    }
    
    final public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
    
    final public function setSyncedAt(?DateTimeImmutable $syncedAt): void
    {
        $this->syncedAt = $syncedAt;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[SyncInfo::FIELD_SYNCED_AT]) && $data[SyncInfo::FIELD_SYNCED_AT] instanceof \DateTimeImmutable) {
           $data[SyncInfo::FIELD_SYNCED_AT] = $data[SyncInfo::FIELD_SYNCED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}