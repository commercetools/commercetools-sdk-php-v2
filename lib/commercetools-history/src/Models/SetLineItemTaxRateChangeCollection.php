<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetLineItemTaxRateChange>
 * @method SetLineItemTaxRateChange current()
 * @method SetLineItemTaxRateChange at($offset)
 */
class SetLineItemTaxRateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemTaxRateChange $value
     * @psalm-param SetLineItemTaxRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemTaxRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemTaxRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemTaxRateChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemTaxRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemTaxRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
