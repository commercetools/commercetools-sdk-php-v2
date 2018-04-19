<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ShippingMethodPagedQueryResponseCollection
{

    /**
     * @param ShippingMethodPagedQueryResponse $value
     * @return ShippingMethodPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodPagedQueryResponse) {
            $data = $this->mapData(ShippingMethodPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
