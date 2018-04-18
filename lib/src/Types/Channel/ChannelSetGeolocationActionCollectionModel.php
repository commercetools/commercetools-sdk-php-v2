<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelSetGeolocationActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelSetGeolocationActionCollection {

    /**
     * @param ChannelSetGeolocationAction $value
     * @return ChannelSetGeolocationActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelSetGeolocationAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelSetGeolocationAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelSetGeolocationAction) {
            $data = $this->mapData(ChannelSetGeolocationAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
