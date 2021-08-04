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
 * @extends ChangeCollection<ChangeIsSearchableChange>
 * @method ChangeIsSearchableChange current()
 * @method ChangeIsSearchableChange end()
 * @method ChangeIsSearchableChange at($offset)
 */
class ChangeIsSearchableChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeIsSearchableChange $value
     * @psalm-param ChangeIsSearchableChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeIsSearchableChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeIsSearchableChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeIsSearchableChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeIsSearchableChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeIsSearchableChange $data */
                $data = ChangeIsSearchableChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
