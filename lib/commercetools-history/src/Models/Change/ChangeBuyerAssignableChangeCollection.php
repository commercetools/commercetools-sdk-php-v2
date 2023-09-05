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
 * @extends ChangeCollection<ChangeBuyerAssignableChange>
 * @method ChangeBuyerAssignableChange current()
 * @method ChangeBuyerAssignableChange end()
 * @method ChangeBuyerAssignableChange at($offset)
 */
class ChangeBuyerAssignableChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeBuyerAssignableChange $value
     * @psalm-param ChangeBuyerAssignableChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeBuyerAssignableChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeBuyerAssignableChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeBuyerAssignableChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeBuyerAssignableChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeBuyerAssignableChange $data */
                $data = ChangeBuyerAssignableChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
