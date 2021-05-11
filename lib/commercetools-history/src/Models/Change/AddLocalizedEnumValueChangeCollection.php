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
 * @extends ChangeCollection<AddLocalizedEnumValueChange>
 * @method AddLocalizedEnumValueChange current()
 * @method AddLocalizedEnumValueChange at($offset)
 */
class AddLocalizedEnumValueChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddLocalizedEnumValueChange $value
     * @psalm-param AddLocalizedEnumValueChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddLocalizedEnumValueChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddLocalizedEnumValueChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddLocalizedEnumValueChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddLocalizedEnumValueChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddLocalizedEnumValueChange $data */
                $data = AddLocalizedEnumValueChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
