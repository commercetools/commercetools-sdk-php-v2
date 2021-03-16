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
 * @extends MapperSequence<ChangeTextLineItemNameChange>
 * @method ChangeTextLineItemNameChange current()
 * @method ChangeTextLineItemNameChange at($offset)
 */
class ChangeTextLineItemNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTextLineItemNameChange $value
     * @psalm-param ChangeTextLineItemNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTextLineItemNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTextLineItemNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTextLineItemNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTextLineItemNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTextLineItemNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
