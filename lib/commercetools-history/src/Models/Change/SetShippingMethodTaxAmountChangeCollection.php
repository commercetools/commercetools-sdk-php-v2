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
 * @extends ChangeCollection<SetShippingMethodTaxAmountChange>
 * @method SetShippingMethodTaxAmountChange current()
 * @method SetShippingMethodTaxAmountChange at($offset)
 */
class SetShippingMethodTaxAmountChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingMethodTaxAmountChange $value
     * @psalm-param SetShippingMethodTaxAmountChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingMethodTaxAmountChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingMethodTaxAmountChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingMethodTaxAmountChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetShippingMethodTaxAmountChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingMethodTaxAmountChange $data */
                $data = SetShippingMethodTaxAmountChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
