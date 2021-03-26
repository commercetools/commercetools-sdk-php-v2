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
 * @extends MapperSequence<RemoveFieldDefinitionChange>
 * @method RemoveFieldDefinitionChange current()
 * @method RemoveFieldDefinitionChange at($offset)
 */
class RemoveFieldDefinitionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveFieldDefinitionChange $value
     * @psalm-param RemoveFieldDefinitionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveFieldDefinitionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveFieldDefinitionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveFieldDefinitionChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveFieldDefinitionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveFieldDefinitionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
