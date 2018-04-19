<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductUpdateActionCollectionModel extends UpdateActionCollectionModel implements ProductUpdateActionCollection
{

    /**
     * @param ProductUpdateAction $value
     * @return ProductUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ProductUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
