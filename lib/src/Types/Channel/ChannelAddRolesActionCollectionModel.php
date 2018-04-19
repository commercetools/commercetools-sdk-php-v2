<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelAddRolesActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelAddRolesActionCollection
{

    /**
     * @param ChannelAddRolesAction $value
     * @return ChannelAddRolesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelAddRolesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelAddRolesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelAddRolesAction) {
            $data = $this->mapData(ChannelAddRolesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
