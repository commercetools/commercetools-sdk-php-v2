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
 * @extends ChangeCollection<StandalonePriceChangeValueChange>
 * @method StandalonePriceChangeValueChange current()
 * @method StandalonePriceChangeValueChange end()
 * @method StandalonePriceChangeValueChange at($offset)
 */
class StandalonePriceChangeValueChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceChangeValueChange $value
     * @psalm-param StandalonePriceChangeValueChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceChangeValueChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceChangeValueChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceChangeValueChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceChangeValueChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceChangeValueChange $data */
                $data = StandalonePriceChangeValueChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
