<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;

class ResourceCollectionModel extends JsonCollection implements ResourceCollection {

    /**
     * @param Resource $value
     * @return ResourceCollection
     */
    public function add($value) {
        if (!$value instanceof Resource) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Resource
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Resource) {
            $data = $this->mapData(Resource::class, $data);
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
     * @return Resource
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
