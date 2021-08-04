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
 * @extends ChangeCollection<ChangeOrderHintChange>
 * @method ChangeOrderHintChange current()
 * @method ChangeOrderHintChange end()
 * @method ChangeOrderHintChange at($offset)
 */
class ChangeOrderHintChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeOrderHintChange $value
     * @psalm-param ChangeOrderHintChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeOrderHintChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeOrderHintChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeOrderHintChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeOrderHintChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeOrderHintChange $data */
                $data = ChangeOrderHintChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
