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
 * @extends ChangeCollection<SetTaxedShippingPriceChange>
 * @method SetTaxedShippingPriceChange current()
 * @method SetTaxedShippingPriceChange end()
 * @method SetTaxedShippingPriceChange at($offset)
 */
class SetTaxedShippingPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTaxedShippingPriceChange $value
     * @psalm-param SetTaxedShippingPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTaxedShippingPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTaxedShippingPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTaxedShippingPriceChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetTaxedShippingPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTaxedShippingPriceChange $data */
                $data = SetTaxedShippingPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
