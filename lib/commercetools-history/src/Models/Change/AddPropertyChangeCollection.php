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
 * @extends ChangeCollection<AddPropertyChange>
 * @method AddPropertyChange current()
 * @method AddPropertyChange end()
 * @method AddPropertyChange at($offset)
 */
class AddPropertyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddPropertyChange $value
     * @psalm-param AddPropertyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddPropertyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddPropertyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddPropertyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddPropertyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddPropertyChange $data */
                $data = AddPropertyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
