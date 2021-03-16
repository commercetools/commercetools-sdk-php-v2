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
 * @extends MapperSequence<ChangeEnumValueLabelChange>
 * @method ChangeEnumValueLabelChange current()
 * @method ChangeEnumValueLabelChange at($offset)
 */
class ChangeEnumValueLabelChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeEnumValueLabelChange $value
     * @psalm-param ChangeEnumValueLabelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeEnumValueLabelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeEnumValueLabelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeEnumValueLabelChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeEnumValueLabelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeEnumValueLabelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
