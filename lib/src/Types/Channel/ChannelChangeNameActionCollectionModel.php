<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelChangeNameActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelChangeNameActionCollection {

    /**
     * @param ChannelChangeNameAction $value
     * @return ChannelChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelChangeNameAction) {
            $data = $this->mapData(ChannelChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
