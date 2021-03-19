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
 * @extends MapperSequence<ChangeFieldDefinitionOrderChange>
 * @method ChangeFieldDefinitionOrderChange current()
 * @method ChangeFieldDefinitionOrderChange at($offset)
 */
class ChangeFieldDefinitionOrderChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeFieldDefinitionOrderChange $value
     * @psalm-param ChangeFieldDefinitionOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeFieldDefinitionOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeFieldDefinitionOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeFieldDefinitionOrderChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeFieldDefinitionOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeFieldDefinitionOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
