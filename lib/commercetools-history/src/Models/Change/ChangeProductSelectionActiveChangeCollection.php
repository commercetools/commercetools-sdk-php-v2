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
 * @extends ChangeCollection<ChangeProductSelectionActiveChange>
 * @method ChangeProductSelectionActiveChange current()
 * @method ChangeProductSelectionActiveChange end()
 * @method ChangeProductSelectionActiveChange at($offset)
 */
class ChangeProductSelectionActiveChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeProductSelectionActiveChange $value
     * @psalm-param ChangeProductSelectionActiveChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeProductSelectionActiveChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeProductSelectionActiveChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeProductSelectionActiveChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeProductSelectionActiveChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeProductSelectionActiveChange $data */
                $data = ChangeProductSelectionActiveChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
