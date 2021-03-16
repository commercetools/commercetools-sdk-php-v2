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
 * @extends MapperSequence<ChangeSlugChange>
 * @method ChangeSlugChange current()
 * @method ChangeSlugChange at($offset)
 */
class ChangeSlugChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeSlugChange $value
     * @psalm-param ChangeSlugChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeSlugChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeSlugChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeSlugChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeSlugChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeSlugChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
