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
 * @extends ChangeCollection<AddExternalImageChange>
 * @method AddExternalImageChange current()
 * @method AddExternalImageChange at($offset)
 */
class AddExternalImageChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddExternalImageChange $value
     * @psalm-param AddExternalImageChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddExternalImageChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddExternalImageChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddExternalImageChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddExternalImageChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddExternalImageChange $data */
                $data = AddExternalImageChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
