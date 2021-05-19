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
 * @extends ChangeCollection<SetShippingMethodTaxRateChange>
 * @method SetShippingMethodTaxRateChange current()
 * @method SetShippingMethodTaxRateChange at($offset)
 */
class SetShippingMethodTaxRateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingMethodTaxRateChange $value
     * @psalm-param SetShippingMethodTaxRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingMethodTaxRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingMethodTaxRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingMethodTaxRateChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetShippingMethodTaxRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingMethodTaxRateChange $data */
                $data = SetShippingMethodTaxRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
