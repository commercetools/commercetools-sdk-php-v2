<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeEnumValueOrderChange>
 * @method ChangeEnumValueOrderChange current()
 * @method ChangeEnumValueOrderChange end()
 * @method ChangeEnumValueOrderChange at($offset)
 */
class ChangeEnumValueOrderChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeEnumValueOrderChange $value
     * @psalm-param ChangeEnumValueOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeEnumValueOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeEnumValueOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeEnumValueOrderChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeEnumValueOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeEnumValueOrderChange $data */
                $data = ChangeEnumValueOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
