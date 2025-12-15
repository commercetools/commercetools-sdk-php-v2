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
 * @extends ChangeCollection<SetShippingMethodTaxCategoryChange>
 * @method SetShippingMethodTaxCategoryChange current()
 * @method SetShippingMethodTaxCategoryChange end()
 * @method SetShippingMethodTaxCategoryChange at($offset)
 */
class SetShippingMethodTaxCategoryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingMethodTaxCategoryChange $value
     * @psalm-param SetShippingMethodTaxCategoryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingMethodTaxCategoryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingMethodTaxCategoryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingMethodTaxCategoryChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingMethodTaxCategoryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingMethodTaxCategoryChange $data */
                $data = SetShippingMethodTaxCategoryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
