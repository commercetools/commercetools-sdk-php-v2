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
 * @extends ChangeCollection<RemoveProductSelectionChange>
 * @method RemoveProductSelectionChange current()
 * @method RemoveProductSelectionChange end()
 * @method RemoveProductSelectionChange at($offset)
 */
class RemoveProductSelectionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveProductSelectionChange $value
     * @psalm-param RemoveProductSelectionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveProductSelectionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveProductSelectionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveProductSelectionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveProductSelectionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveProductSelectionChange $data */
                $data = RemoveProductSelectionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
