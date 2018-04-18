<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ChannelDraftCollectionModel extends JsonCollection implements ChannelDraftCollection {

    /**
     * @param ChannelDraft $value
     * @return ChannelDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelDraft) {
            $data = $this->mapData(ChannelDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
