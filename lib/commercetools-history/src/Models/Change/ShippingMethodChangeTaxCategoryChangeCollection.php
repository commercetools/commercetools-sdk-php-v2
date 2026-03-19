<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ShippingMethodChangeTaxCategoryChange>
 * @method ShippingMethodChangeTaxCategoryChange current()
 * @method ShippingMethodChangeTaxCategoryChange end()
 * @method ShippingMethodChangeTaxCategoryChange at($offset)
 */
class ShippingMethodChangeTaxCategoryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodChangeTaxCategoryChange $value
     * @psalm-param ShippingMethodChangeTaxCategoryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeTaxCategoryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeTaxCategoryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeTaxCategoryChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodChangeTaxCategoryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodChangeTaxCategoryChange $data */
                $data = ShippingMethodChangeTaxCategoryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
