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
 * @extends ChangeCollection<AddPriceChange>
 * @method AddPriceChange current()
 * @method AddPriceChange end()
 * @method AddPriceChange at($offset)
 */
class AddPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddPriceChange $value
     * @psalm-param AddPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddPriceChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddPriceChange $data */
                $data = AddPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
