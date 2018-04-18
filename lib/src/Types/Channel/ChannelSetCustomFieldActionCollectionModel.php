<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelSetCustomFieldActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelSetCustomFieldActionCollection {

    /**
     * @param ChannelSetCustomFieldAction $value
     * @return ChannelSetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelSetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelSetCustomFieldAction) {
            $data = $this->mapData(ChannelSetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
