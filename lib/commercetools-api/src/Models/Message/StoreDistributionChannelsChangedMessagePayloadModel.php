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
final class StoreDistributionChannelsChangedMessagePayloadModel extends JsonObjectModel implements StoreDistributionChannelsChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreDistributionChannelsChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ChannelReferenceCollection
     */
    protected $addedDistributionChannels;

    /**
     *
     * @var ?ChannelReferenceCollection
     */
    protected $removedDistributionChannels;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ChannelReferenceCollection $addedDistributionChannels = null,
        ?ChannelReferenceCollection $removedDistributionChannels = null,
        ?string $type = null
    ) {
        $this->addedDistributionChannels = $addedDistributionChannels;
        $this->removedDistributionChannels = $removedDistributionChannels;
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
     * <p>Product distribution Channels that have been added to the <a href="/../api/projects/stores">Store</a>.</p>
     *
     *
     * @return null|ChannelReferenceCollection
     */
    public function getAddedDistributionChannels()
    {
        if (is_null($this->addedDistributionChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDED_DISTRIBUTION_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->addedDistributionChannels = ChannelReferenceCollection::fromArray($data);
        }

        return $this->addedDistributionChannels;
    }

    /**
     * <p>Product distribution Channels that have been removed from the <a href="/../api/projects/stores">Store</a>.</p>
     *
     *
     * @return null|ChannelReferenceCollection
     */
    public function getRemovedDistributionChannels()
    {
        if (is_null($this->removedDistributionChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REMOVED_DISTRIBUTION_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->removedDistributionChannels = ChannelReferenceCollection::fromArray($data);
        }

        return $this->removedDistributionChannels;
    }


    /**
     * @param ?ChannelReferenceCollection $addedDistributionChannels
     */
    public function setAddedDistributionChannels(?ChannelReferenceCollection $addedDistributionChannels): void
    {
        $this->addedDistributionChannels = $addedDistributionChannels;
    }

    /**
     * @param ?ChannelReferenceCollection $removedDistributionChannels
     */
    public function setRemovedDistributionChannels(?ChannelReferenceCollection $removedDistributionChannels): void
    {
        $this->removedDistributionChannels = $removedDistributionChannels;
    }
}
