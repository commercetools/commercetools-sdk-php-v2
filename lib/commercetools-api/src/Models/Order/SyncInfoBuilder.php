<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<SyncInfo>
 */
final class SyncInfoBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ChannelReferenceBuilder|ChannelReference
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
       return ($this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       return $this->externalId;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getSyncedAt()
    {
       return $this->syncedAt;
    }
    /**
     * @return $this
     */
    final public function withChannel(?ChannelReference $channel)
    {
        $this->channel = $channel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSyncedAt(?DateTimeImmutable $syncedAt)
    {
        $this->syncedAt = $syncedAt;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withChannelBuilder(?ChannelReferenceBuilder $channel)
    {
        $this->channel = $channel;
        
        return $this;
    }
    
    public function build(): SyncInfo {
        return new SyncInfoModel(
            ($this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel),
            $this->externalId,
            $this->syncedAt
        );
    }
    
    public static function of(): SyncInfoBuilder
    {
        return new self();
    }
}