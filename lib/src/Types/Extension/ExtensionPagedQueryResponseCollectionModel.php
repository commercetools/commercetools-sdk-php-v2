<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ExtensionPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ExtensionPagedQueryResponseCollection
{

    /**
     * @param ExtensionPagedQueryResponse $value
     * @return ExtensionPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionPagedQueryResponse) {
            $data = $this->mapData(ExtensionPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
