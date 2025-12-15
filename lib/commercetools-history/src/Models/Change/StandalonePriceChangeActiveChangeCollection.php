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
 * @extends ChangeCollection<StandalonePriceChangeActiveChange>
 * @method StandalonePriceChangeActiveChange current()
 * @method StandalonePriceChangeActiveChange end()
 * @method StandalonePriceChangeActiveChange at($offset)
 */
class StandalonePriceChangeActiveChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceChangeActiveChange $value
     * @psalm-param StandalonePriceChangeActiveChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceChangeActiveChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceChangeActiveChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceChangeActiveChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceChangeActiveChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceChangeActiveChange $data */
                $data = StandalonePriceChangeActiveChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
