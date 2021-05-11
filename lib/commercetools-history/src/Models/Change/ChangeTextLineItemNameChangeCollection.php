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
 * @extends ChangeCollection<ChangeTextLineItemNameChange>
 * @method ChangeTextLineItemNameChange current()
 * @method ChangeTextLineItemNameChange at($offset)
 */
class ChangeTextLineItemNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeTextLineItemNameChange $value
     * @psalm-param ChangeTextLineItemNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTextLineItemNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTextLineItemNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTextLineItemNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTextLineItemNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTextLineItemNameChange $data */
                $data = ChangeTextLineItemNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
