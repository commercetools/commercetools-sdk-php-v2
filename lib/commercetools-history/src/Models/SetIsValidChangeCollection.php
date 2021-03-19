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
 * @extends MapperSequence<SetIsValidChange>
 * @method SetIsValidChange current()
 * @method SetIsValidChange at($offset)
 */
class SetIsValidChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetIsValidChange $value
     * @psalm-param SetIsValidChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetIsValidChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetIsValidChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetIsValidChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetIsValidChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetIsValidChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
