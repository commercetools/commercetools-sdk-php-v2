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
 * @extends ChangeCollection<AddProductChange>
 * @method AddProductChange current()
 * @method AddProductChange end()
 * @method AddProductChange at($offset)
 */
class AddProductChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddProductChange $value
     * @psalm-param AddProductChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddProductChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddProductChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddProductChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddProductChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddProductChange $data */
                $data = AddProductChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
