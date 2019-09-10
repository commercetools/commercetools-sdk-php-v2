<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CreatedBy>
 *
 * @method CreatedBy current()
 * @method CreatedBy at($offset)
 */
class CreatedByCollection extends MapperSequence
{
    /**
     * @psalm-assert CreatedBy $value
     * @psalm-param CreatedBy|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CreatedByCollection
     */
    public function add($value)
    {
        if (!$value instanceof CreatedBy) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CreatedBy
     */
    protected function mapper()
    {
        return function (int $index): ?CreatedBy {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CreatedByModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
