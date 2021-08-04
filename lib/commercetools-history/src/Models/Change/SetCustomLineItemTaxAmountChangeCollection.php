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
 * @extends ChangeCollection<SetCustomLineItemTaxAmountChange>
 * @method SetCustomLineItemTaxAmountChange current()
 * @method SetCustomLineItemTaxAmountChange end()
 * @method SetCustomLineItemTaxAmountChange at($offset)
 */
class SetCustomLineItemTaxAmountChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemTaxAmountChange $value
     * @psalm-param SetCustomLineItemTaxAmountChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemTaxAmountChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemTaxAmountChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemTaxAmountChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomLineItemTaxAmountChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemTaxAmountChange $data */
                $data = SetCustomLineItemTaxAmountChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
