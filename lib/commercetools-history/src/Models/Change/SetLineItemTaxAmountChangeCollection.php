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
 * @extends ChangeCollection<SetLineItemTaxAmountChange>
 * @method SetLineItemTaxAmountChange current()
 * @method SetLineItemTaxAmountChange at($offset)
 */
class SetLineItemTaxAmountChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemTaxAmountChange $value
     * @psalm-param SetLineItemTaxAmountChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemTaxAmountChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemTaxAmountChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemTaxAmountChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemTaxAmountChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemTaxAmountChange $data */
                $data = SetLineItemTaxAmountChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
