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
 * @extends MapperSequence<ChangePlainEnumValueOrderChange>
 * @method ChangePlainEnumValueOrderChange current()
 * @method ChangePlainEnumValueOrderChange at($offset)
 */
class ChangePlainEnumValueOrderChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangePlainEnumValueOrderChange $value
     * @psalm-param ChangePlainEnumValueOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePlainEnumValueOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePlainEnumValueOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePlainEnumValueOrderChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePlainEnumValueOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangePlainEnumValueOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
