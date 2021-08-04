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
 * @extends ChangeCollection<ChangeTextLineItemsOrderChange>
 * @method ChangeTextLineItemsOrderChange current()
 * @method ChangeTextLineItemsOrderChange end()
 * @method ChangeTextLineItemsOrderChange at($offset)
 */
class ChangeTextLineItemsOrderChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeTextLineItemsOrderChange $value
     * @psalm-param ChangeTextLineItemsOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTextLineItemsOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTextLineItemsOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTextLineItemsOrderChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeTextLineItemsOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTextLineItemsOrderChange $data */
                $data = ChangeTextLineItemsOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
