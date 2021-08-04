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
 * @extends ChangeCollection<ChangeNameChange>
 * @method ChangeNameChange current()
 * @method ChangeNameChange end()
 * @method ChangeNameChange at($offset)
 */
class ChangeNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeNameChange $value
     * @psalm-param ChangeNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeNameChange $data */
                $data = ChangeNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
