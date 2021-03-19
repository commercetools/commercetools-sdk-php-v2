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
 * @extends MapperSequence<RemoveAttributeDefinitionChange>
 * @method RemoveAttributeDefinitionChange current()
 * @method RemoveAttributeDefinitionChange at($offset)
 */
class RemoveAttributeDefinitionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveAttributeDefinitionChange $value
     * @psalm-param RemoveAttributeDefinitionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveAttributeDefinitionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveAttributeDefinitionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveAttributeDefinitionChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveAttributeDefinitionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveAttributeDefinitionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
