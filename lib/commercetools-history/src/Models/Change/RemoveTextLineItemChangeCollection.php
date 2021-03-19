<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveTextLineItemChange>
 * @method RemoveTextLineItemChange current()
 * @method RemoveTextLineItemChange at($offset)
 */
class RemoveTextLineItemChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveTextLineItemChange $value
     * @psalm-param RemoveTextLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveTextLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveTextLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveTextLineItemChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveTextLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveTextLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
