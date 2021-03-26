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
 * @extends MapperSequence<AddAttributeDefinitionChange>
 * @method AddAttributeDefinitionChange current()
 * @method AddAttributeDefinitionChange at($offset)
 */
class AddAttributeDefinitionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddAttributeDefinitionChange $value
     * @psalm-param AddAttributeDefinitionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddAttributeDefinitionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddAttributeDefinitionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddAttributeDefinitionChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddAttributeDefinitionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddAttributeDefinitionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
