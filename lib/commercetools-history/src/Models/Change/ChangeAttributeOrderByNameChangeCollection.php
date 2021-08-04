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
 * @extends ChangeCollection<ChangeAttributeOrderByNameChange>
 * @method ChangeAttributeOrderByNameChange current()
 * @method ChangeAttributeOrderByNameChange end()
 * @method ChangeAttributeOrderByNameChange at($offset)
 */
class ChangeAttributeOrderByNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeAttributeOrderByNameChange $value
     * @psalm-param ChangeAttributeOrderByNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAttributeOrderByNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAttributeOrderByNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAttributeOrderByNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeAttributeOrderByNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeAttributeOrderByNameChange $data */
                $data = ChangeAttributeOrderByNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
