<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use DateTimeImmutable;

interface StagedOrderUpdateSyncInfoAction extends StagedOrderUpdateAction
{
    
    const FIELD_CHANNEL = 'channel';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_SYNCED_AT = 'syncedAt';

    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getChannel();
    
    /**
     *
     * @return string|null
     */
    public function getExternalId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getSyncedAt();
    public function setChannel(?ChannelResourceIdentifier $channel): void;
    
    public function setExternalId(?string $externalId): void;
    
    public function setSyncedAt(?DateTimeImmutable $syncedAt): void;
}