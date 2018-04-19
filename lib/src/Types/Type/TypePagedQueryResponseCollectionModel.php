<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypePagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements TypePagedQueryResponseCollection
{

    /**
     * @param TypePagedQueryResponse $value
     * @return TypePagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof TypePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypePagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypePagedQueryResponse) {
            $data = $this->mapData(TypePagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
