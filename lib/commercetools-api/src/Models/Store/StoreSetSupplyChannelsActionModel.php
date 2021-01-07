<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreSetSupplyChannelsActionModel extends JsonObjectModel implements StoreSetSupplyChannelsAction
{
    public const DISCRIMINATOR_VALUE = 'setSupplyChannels';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ChannelResourceIdentifierCollection
     */
    protected $supplyChannels;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ChannelResourceIdentifierCollection $supplyChannels = null
    ) {
        $this->supplyChannels = $supplyChannels;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getSupplyChannels()
    {
        if (is_null($this->supplyChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->supplyChannels = ChannelResourceIdentifierCollection::fromArray($data);
        }

        return $this->supplyChannels;
    }


    /**
     * @param ?ChannelResourceIdentifierCollection $supplyChannels
     */
    public function setSupplyChannels(?ChannelResourceIdentifierCollection $supplyChannels): void
    {
        $this->supplyChannels = $supplyChannels;
    }
}
