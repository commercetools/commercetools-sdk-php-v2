<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class FieldContainerCollectionModel extends JsonCollection implements FieldContainerCollection {

    /**
     * @param FieldContainer $value
     * @return FieldContainerCollection
     */
    public function add($value) {
        if (!$value instanceof FieldContainer) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return FieldContainer
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof FieldContainer) {
            $data = $this->mapData(FieldContainer::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
