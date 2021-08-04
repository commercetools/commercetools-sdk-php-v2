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
 * @extends ChangeCollection<AddPlainEnumValueChange>
 * @method AddPlainEnumValueChange current()
 * @method AddPlainEnumValueChange at($offset)
 */
class AddPlainEnumValueChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddPlainEnumValueChange $value
     * @psalm-param AddPlainEnumValueChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddPlainEnumValueChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddPlainEnumValueChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddPlainEnumValueChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddPlainEnumValueChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddPlainEnumValueChange $data */
                $data = AddPlainEnumValueChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
