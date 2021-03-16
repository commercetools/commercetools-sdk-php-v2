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
 * @extends MapperSequence<SetLineItemPriceChange>
 * @method SetLineItemPriceChange current()
 * @method SetLineItemPriceChange at($offset)
 */
class SetLineItemPriceChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemPriceChange $value
     * @psalm-param SetLineItemPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
