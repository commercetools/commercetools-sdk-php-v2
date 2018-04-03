<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShoppingListCollectionModel extends JsonCollection implements ShoppingListCollection {

    /**
     * @param ShoppingList $value
     * @return ShoppingListCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingList) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingList
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingList) {
            $data = $this->mapData(ShoppingList::class, $data);
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
     * @return ShoppingList
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
