<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Channel\ChannelReference;

interface OrderUpdateSyncInfoAction extends OrderUpdateAction {
    const FIELD_CHANNEL = 'channel';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_SYNCED_AT = 'syncedAt';

    /**
     * @return ChannelReference
     */
    public function getChannel();

    /**
     * @return string
     */
    public function getExternalId();

    /**
     * @return \DateTimeImmutable
     */
    public function getSyncedAt();

    /**
     * @param ChannelReference $channel
     * @return $this
     */
    public function setChannel(ChannelReference $channel);

    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId);

    /**
     * @param \DateTimeImmutable $syncedAt
     * @return $this
     */
    public function setSyncedAt($syncedAt);

}
