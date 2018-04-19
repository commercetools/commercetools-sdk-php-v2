<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelReferenceCollectionModel extends ReferenceCollectionModel implements ChannelReferenceCollection
{

    /**
     * @param ChannelReference $value
     * @return ChannelReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelReference) {
            $data = $this->mapData(ChannelReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
