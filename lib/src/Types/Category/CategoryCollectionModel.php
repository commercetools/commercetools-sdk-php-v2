<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\ResourceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryCollectionModel extends ResourceCollectionModel implements CategoryCollection {

    /**
     * @param Category $value
     * @return CategoryCollection
     */
    public function add($value) {
        if (!$value instanceof Category) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Category
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Category) {
            $data = $this->mapData(Category::class, $data);
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
     * @return Category
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
