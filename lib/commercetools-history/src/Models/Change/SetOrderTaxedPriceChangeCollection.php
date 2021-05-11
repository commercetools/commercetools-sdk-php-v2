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
 * @extends ChangeCollection<SetOrderTaxedPriceChange>
 * @method SetOrderTaxedPriceChange current()
 * @method SetOrderTaxedPriceChange at($offset)
 */
class SetOrderTaxedPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetOrderTaxedPriceChange $value
     * @psalm-param SetOrderTaxedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderTaxedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderTaxedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderTaxedPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetOrderTaxedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetOrderTaxedPriceChange $data */
                $data = SetOrderTaxedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
