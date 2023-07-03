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
 * @extends ChangeCollection<ChangeStatusChange>
 * @method ChangeStatusChange current()
 * @method ChangeStatusChange end()
 * @method ChangeStatusChange at($offset)
 */
class ChangeStatusChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeStatusChange $value
     * @psalm-param ChangeStatusChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeStatusChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeStatusChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeStatusChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeStatusChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeStatusChange $data */
                $data = ChangeStatusChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
