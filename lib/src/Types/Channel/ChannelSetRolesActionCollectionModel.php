<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelSetRolesActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelSetRolesActionCollection
{

    /**
     * @param ChannelSetRolesAction $value
     * @return ChannelSetRolesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelSetRolesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelSetRolesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelSetRolesAction) {
            $data = $this->mapData(ChannelSetRolesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
