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
 * @extends ChangeCollection<SetCustomLineItemTaxRateChange>
 * @method SetCustomLineItemTaxRateChange current()
 * @method SetCustomLineItemTaxRateChange at($offset)
 */
class SetCustomLineItemTaxRateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemTaxRateChange $value
     * @psalm-param SetCustomLineItemTaxRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemTaxRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemTaxRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemTaxRateChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemTaxRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemTaxRateChange $data */
                $data = SetCustomLineItemTaxRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
