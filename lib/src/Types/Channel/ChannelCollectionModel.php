<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ChannelCollectionModel extends JsonCollection implements ChannelCollection {

    /**
     * @param Channel $value
     * @return ChannelCollection
     */
    public function add($value) {
        if (!$value instanceof Channel) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Channel
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Channel) {
            $data = $this->mapData(Channel::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @param string $id
     * @return Channel
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
