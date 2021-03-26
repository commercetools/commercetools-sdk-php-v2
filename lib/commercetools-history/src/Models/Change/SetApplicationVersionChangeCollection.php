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
 * @extends MapperSequence<SetApplicationVersionChange>
 * @method SetApplicationVersionChange current()
 * @method SetApplicationVersionChange at($offset)
 */
class SetApplicationVersionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetApplicationVersionChange $value
     * @psalm-param SetApplicationVersionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetApplicationVersionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetApplicationVersionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetApplicationVersionChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetApplicationVersionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetApplicationVersionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
