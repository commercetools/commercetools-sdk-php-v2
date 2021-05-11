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
 * @extends ChangeCollection<AddEnumValueChange>
 * @method AddEnumValueChange current()
 * @method AddEnumValueChange at($offset)
 */
class AddEnumValueChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddEnumValueChange $value
     * @psalm-param AddEnumValueChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddEnumValueChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddEnumValueChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddEnumValueChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddEnumValueChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddEnumValueChange $data */
                $data = AddEnumValueChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
