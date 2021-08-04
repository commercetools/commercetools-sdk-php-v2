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
 * @extends ChangeCollection<ChangeInitialChange>
 * @method ChangeInitialChange current()
 * @method ChangeInitialChange end()
 * @method ChangeInitialChange at($offset)
 */
class ChangeInitialChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeInitialChange $value
     * @psalm-param ChangeInitialChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeInitialChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeInitialChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeInitialChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeInitialChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeInitialChange $data */
                $data = ChangeInitialChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
