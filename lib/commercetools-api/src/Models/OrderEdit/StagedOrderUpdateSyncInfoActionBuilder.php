<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<StagedOrderUpdateSyncInfoAction>
 */
final class StagedOrderUpdateSyncInfoActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ChannelResourceIdentifierBuilder|ChannelResourceIdentifier
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
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getChannel()
    {
       return ($this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel);
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
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withChannel(?ChannelResourceIdentifier $channel)
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
    final public function withChannelBuilder(?ChannelResourceIdentifierBuilder $channel)
    {
        $this->channel = $channel;
        
        return $this;
    }
    
    public function build(): StagedOrderUpdateSyncInfoAction {
        return new StagedOrderUpdateSyncInfoActionModel(
            $this->action,
            ($this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel),
            $this->externalId,
            $this->syncedAt
        );
    }
    
    public static function of(): StagedOrderUpdateSyncInfoActionBuilder
    {
        return new self();
    }
}