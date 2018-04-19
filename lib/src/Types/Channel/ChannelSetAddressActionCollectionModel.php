<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelSetAddressActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelSetAddressActionCollection
{

    /**
     * @param ChannelSetAddressAction $value
     * @return ChannelSetAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelSetAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelSetAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelSetAddressAction) {
            $data = $this->mapData(ChannelSetAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
