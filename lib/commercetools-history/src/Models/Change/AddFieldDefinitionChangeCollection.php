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
 * @extends MapperSequence<AddFieldDefinitionChange>
 * @method AddFieldDefinitionChange current()
 * @method AddFieldDefinitionChange at($offset)
 */
class AddFieldDefinitionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddFieldDefinitionChange $value
     * @psalm-param AddFieldDefinitionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddFieldDefinitionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddFieldDefinitionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddFieldDefinitionChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddFieldDefinitionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddFieldDefinitionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
