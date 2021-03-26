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
 * @extends MapperSequence<SetAuthorNameChange>
 * @method SetAuthorNameChange current()
 * @method SetAuthorNameChange at($offset)
 */
class SetAuthorNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAuthorNameChange $value
     * @psalm-param SetAuthorNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAuthorNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAuthorNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAuthorNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetAuthorNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAuthorNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
