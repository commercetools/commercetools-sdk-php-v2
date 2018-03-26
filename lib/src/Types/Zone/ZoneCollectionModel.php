<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\JsonCollection;

class ZoneCollectionModel extends JsonCollection implements ZoneCollection {

    /**
     * @param Zone $value
     * @return ZoneCollection
     */
    public function add($value) {
        if (!$value instanceof Zone) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Zone
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Zone) {
            $data = $this->mapData(Zone::class, $data);
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
     * @return Zone
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
