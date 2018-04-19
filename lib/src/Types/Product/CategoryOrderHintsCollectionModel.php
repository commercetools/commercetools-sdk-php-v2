<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CategoryOrderHintsCollectionModel extends JsonCollection implements CategoryOrderHintsCollection
{

    /**
     * @param CategoryOrderHints $value
     * @return CategoryOrderHintsCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryOrderHints) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryOrderHints
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryOrderHints) {
            $data = $this->mapData(CategoryOrderHints::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
