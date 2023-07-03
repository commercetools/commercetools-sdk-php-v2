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
 * @extends ChangeCollection<AddProductSelectionChange>
 * @method AddProductSelectionChange current()
 * @method AddProductSelectionChange end()
 * @method AddProductSelectionChange at($offset)
 */
class AddProductSelectionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddProductSelectionChange $value
     * @psalm-param AddProductSelectionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddProductSelectionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddProductSelectionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddProductSelectionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddProductSelectionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddProductSelectionChange $data */
                $data = AddProductSelectionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
