<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreSupplyChannelsChangedMessagePayloadModel extends JsonObjectModel implements StoreSupplyChannelsChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreSupplyChannelsChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ChannelReferenceCollection
     */
    protected $addedSupplyChannels;

    /**
     *
     * @var ?ChannelReferenceCollection
     */
    protected $removedSupplyChannels;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ChannelReferenceCollection $addedSupplyChannels = null,
        ?ChannelReferenceCollection $removedSupplyChannels = null,
        ?string $type = null
    ) {
        $this->addedSupplyChannels = $addedSupplyChannels;
        $this->removedSupplyChannels = $removedSupplyChannels;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Inventory supply Channels that have been added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *
     *
     * @return null|ChannelReferenceCollection
     */
    public function getAddedSupplyChannels()
    {
        if (is_null($this->addedSupplyChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDED_SUPPLY_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->addedSupplyChannels = ChannelReferenceCollection::fromArray($data);
        }

        return $this->addedSupplyChannels;
    }

    /**
     * <p>Inventory supply Channels that have been removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *
     *
     * @return null|ChannelReferenceCollection
     */
    public function getRemovedSupplyChannels()
    {
        if (is_null($this->removedSupplyChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REMOVED_SUPPLY_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->removedSupplyChannels = ChannelReferenceCollection::fromArray($data);
        }

        return $this->removedSupplyChannels;
    }


    /**
     * @param ?ChannelReferenceCollection $addedSupplyChannels
     */
    public function setAddedSupplyChannels(?ChannelReferenceCollection $addedSupplyChannels): void
    {
        $this->addedSupplyChannels = $addedSupplyChannels;
    }

    /**
     * @param ?ChannelReferenceCollection $removedSupplyChannels
     */
    public function setRemovedSupplyChannels(?ChannelReferenceCollection $removedSupplyChannels): void
    {
        $this->removedSupplyChannels = $removedSupplyChannels;
    }
}
