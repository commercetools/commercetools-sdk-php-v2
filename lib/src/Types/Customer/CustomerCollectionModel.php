<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;

class CustomerCollectionModel extends JsonCollection implements CustomerCollection {

    /**
     * @param Customer $value
     * @return CustomerCollection
     */
    public function add($value) {
        if (!$value instanceof Customer) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Customer
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Customer) {
            $data = $this->mapData(Customer::class, $data);
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
     * @return Customer
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
