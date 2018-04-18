<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelUpdateCollectionModel extends UpdateCollectionModel implements ChannelUpdateCollection {

    /**
     * @param ChannelUpdate $value
     * @return ChannelUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelUpdate) {
            $data = $this->mapData(ChannelUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
