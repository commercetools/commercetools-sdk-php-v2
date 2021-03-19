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
 * @extends MapperSequence<ChangeDescriptionChange>
 * @method ChangeDescriptionChange current()
 * @method ChangeDescriptionChange at($offset)
 */
class ChangeDescriptionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeDescriptionChange $value
     * @psalm-param ChangeDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeDescriptionChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
