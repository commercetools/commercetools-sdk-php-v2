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
 * @extends ChangeCollection<ChangeLineItemNameChange>
 * @method ChangeLineItemNameChange current()
 * @method ChangeLineItemNameChange end()
 * @method ChangeLineItemNameChange at($offset)
 */
class ChangeLineItemNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeLineItemNameChange $value
     * @psalm-param ChangeLineItemNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLineItemNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLineItemNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLineItemNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeLineItemNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeLineItemNameChange $data */
                $data = ChangeLineItemNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
