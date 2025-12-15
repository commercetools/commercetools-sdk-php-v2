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
 * @extends ChangeCollection<StandalonePriceSetKeyChange>
 * @method StandalonePriceSetKeyChange current()
 * @method StandalonePriceSetKeyChange end()
 * @method StandalonePriceSetKeyChange at($offset)
 */
class StandalonePriceSetKeyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceSetKeyChange $value
     * @psalm-param StandalonePriceSetKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetKeyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetKeyChange $data */
                $data = StandalonePriceSetKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
