<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerCreateEmailTokenCollectionModel extends JsonCollection implements CustomerCreateEmailTokenCollection {

    /**
     * @param CustomerCreateEmailToken $value
     * @return CustomerCreateEmailTokenCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerCreateEmailToken) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerCreateEmailToken
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerCreateEmailToken) {
            $data = $this->mapData(CustomerCreateEmailToken::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
