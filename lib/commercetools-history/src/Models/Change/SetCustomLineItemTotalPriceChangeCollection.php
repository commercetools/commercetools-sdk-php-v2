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
 * @extends ChangeCollection<SetCustomLineItemTotalPriceChange>
 * @method SetCustomLineItemTotalPriceChange current()
 * @method SetCustomLineItemTotalPriceChange at($offset)
 */
class SetCustomLineItemTotalPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemTotalPriceChange $value
     * @psalm-param SetCustomLineItemTotalPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemTotalPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemTotalPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemTotalPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemTotalPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemTotalPriceChange $data */
                $data = SetCustomLineItemTotalPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
