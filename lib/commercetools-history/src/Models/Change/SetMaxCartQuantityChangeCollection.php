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
 * @extends ChangeCollection<SetMaxCartQuantityChange>
 * @method SetMaxCartQuantityChange current()
 * @method SetMaxCartQuantityChange end()
 * @method SetMaxCartQuantityChange at($offset)
 */
class SetMaxCartQuantityChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMaxCartQuantityChange $value
     * @psalm-param SetMaxCartQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMaxCartQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMaxCartQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMaxCartQuantityChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMaxCartQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMaxCartQuantityChange $data */
                $data = SetMaxCartQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
