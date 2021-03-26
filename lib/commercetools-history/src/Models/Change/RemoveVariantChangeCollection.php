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
 * @extends MapperSequence<RemoveVariantChange>
 * @method RemoveVariantChange current()
 * @method RemoveVariantChange at($offset)
 */
class RemoveVariantChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveVariantChange $value
     * @psalm-param RemoveVariantChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveVariantChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveVariantChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveVariantChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveVariantChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveVariantChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
