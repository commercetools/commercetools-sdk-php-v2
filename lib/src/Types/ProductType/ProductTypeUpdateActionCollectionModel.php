<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeUpdateActionCollectionModel extends UpdateActionCollectionModel implements ProductTypeUpdateActionCollection {

    /**
     * @param ProductTypeUpdateAction $value
     * @return ProductTypeUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ProductTypeUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
