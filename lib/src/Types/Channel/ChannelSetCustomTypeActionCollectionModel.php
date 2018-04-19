<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelSetCustomTypeActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelSetCustomTypeActionCollection
{

    /**
     * @param ChannelSetCustomTypeAction $value
     * @return ChannelSetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelSetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelSetCustomTypeAction) {
            $data = $this->mapData(ChannelSetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
