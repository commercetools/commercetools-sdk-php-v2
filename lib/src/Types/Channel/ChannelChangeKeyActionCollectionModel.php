<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelChangeKeyActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelChangeKeyActionCollection {

    /**
     * @param ChannelChangeKeyAction $value
     * @return ChannelChangeKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelChangeKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelChangeKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelChangeKeyAction) {
            $data = $this->mapData(ChannelChangeKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
