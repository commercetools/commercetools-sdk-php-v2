<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelChangeDescriptionActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelChangeDescriptionActionCollection {

    /**
     * @param ChannelChangeDescriptionAction $value
     * @return ChannelChangeDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelChangeDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelChangeDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelChangeDescriptionAction) {
            $data = $this->mapData(ChannelChangeDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
