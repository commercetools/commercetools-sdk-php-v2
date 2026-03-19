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
 * @extends ChangeCollection<StandalonePriceSetCustomTypeChange>
 * @method StandalonePriceSetCustomTypeChange current()
 * @method StandalonePriceSetCustomTypeChange end()
 * @method StandalonePriceSetCustomTypeChange at($offset)
 */
class StandalonePriceSetCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceSetCustomTypeChange $value
     * @psalm-param StandalonePriceSetCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetCustomTypeChange $data */
                $data = StandalonePriceSetCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
