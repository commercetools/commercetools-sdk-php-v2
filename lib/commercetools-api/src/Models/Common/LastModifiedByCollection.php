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
 * @extends MapperSequence<LastModifiedBy>
 *
 * @method LastModifiedBy current()
 * @method LastModifiedBy at($offset)
 */
class LastModifiedByCollection extends MapperSequence
{
    /**
     * @psalm-assert LastModifiedBy $value
     * @psalm-param LastModifiedBy|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return LastModifiedByCollection
     */
    public function add($value)
    {
        if (!$value instanceof LastModifiedBy) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LastModifiedBy
     */
    protected function mapper()
    {
        return function (int $index): ?LastModifiedBy {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LastModifiedByModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
