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
 * @extends ChangeCollection<SetOrderTotalPriceChange>
 * @method SetOrderTotalPriceChange current()
 * @method SetOrderTotalPriceChange end()
 * @method SetOrderTotalPriceChange at($offset)
 */
class SetOrderTotalPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetOrderTotalPriceChange $value
     * @psalm-param SetOrderTotalPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderTotalPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderTotalPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderTotalPriceChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetOrderTotalPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetOrderTotalPriceChange $data */
                $data = SetOrderTotalPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
