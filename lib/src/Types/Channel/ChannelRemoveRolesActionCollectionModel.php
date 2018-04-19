<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelRemoveRolesActionCollectionModel extends ChannelUpdateActionCollectionModel implements ChannelRemoveRolesActionCollection
{

    /**
     * @param ChannelRemoveRolesAction $value
     * @return ChannelRemoveRolesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelRemoveRolesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelRemoveRolesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelRemoveRolesAction) {
            $data = $this->mapData(ChannelRemoveRolesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
