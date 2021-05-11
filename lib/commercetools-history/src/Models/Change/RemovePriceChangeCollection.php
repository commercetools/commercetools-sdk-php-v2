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
 * @extends ChangeCollection<RemovePriceChange>
 * @method RemovePriceChange current()
 * @method RemovePriceChange at($offset)
 */
class RemovePriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemovePriceChange $value
     * @psalm-param RemovePriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemovePriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemovePriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemovePriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemovePriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemovePriceChange $data */
                $data = RemovePriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
