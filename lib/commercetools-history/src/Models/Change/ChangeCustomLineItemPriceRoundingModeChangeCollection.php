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
 * @extends ChangeCollection<ChangeCustomLineItemPriceRoundingModeChange>
 * @method ChangeCustomLineItemPriceRoundingModeChange current()
 * @method ChangeCustomLineItemPriceRoundingModeChange end()
 * @method ChangeCustomLineItemPriceRoundingModeChange at($offset)
 */
class ChangeCustomLineItemPriceRoundingModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeCustomLineItemPriceRoundingModeChange $value
     * @psalm-param ChangeCustomLineItemPriceRoundingModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCustomLineItemPriceRoundingModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeCustomLineItemPriceRoundingModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeCustomLineItemPriceRoundingModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeCustomLineItemPriceRoundingModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeCustomLineItemPriceRoundingModeChange $data */
                $data = ChangeCustomLineItemPriceRoundingModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
