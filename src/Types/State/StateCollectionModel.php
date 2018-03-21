<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Base\JsonCollection;

class StateCollectionModel extends JsonCollection implements StateCollection {

    /**
     * @param State $value
     * @return StateCollection
     */
    public function add($value) {
        if (!$value instanceof State) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return State
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof State) {
            $data = $this->mapData(State::class, $data);
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
     * @return string
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
