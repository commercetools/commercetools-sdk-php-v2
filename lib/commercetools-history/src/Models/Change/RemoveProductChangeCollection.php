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
 * @extends ChangeCollection<RemoveProductChange>
 * @method RemoveProductChange current()
 * @method RemoveProductChange end()
 * @method RemoveProductChange at($offset)
 */
class RemoveProductChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveProductChange $value
     * @psalm-param RemoveProductChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveProductChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveProductChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveProductChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveProductChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveProductChange $data */
                $data = RemoveProductChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
