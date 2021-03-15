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
 * @extends MapperSequence<ModifiedBy>
 * @method ModifiedBy current()
 * @method ModifiedBy at($offset)
 */
class ModifiedByCollection extends MapperSequence
{
    /**
     * @psalm-assert ModifiedBy $value
     * @psalm-param ModifiedBy|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ModifiedByCollection
     */
    public function add($value)
    {
        if (!$value instanceof ModifiedBy) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ModifiedBy
     */
    protected function mapper()
    {
        return function (int $index): ?ModifiedBy {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ModifiedByModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
