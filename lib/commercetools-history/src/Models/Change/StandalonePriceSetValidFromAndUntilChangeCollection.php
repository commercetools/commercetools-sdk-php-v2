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
 * @extends ChangeCollection<StandalonePriceSetValidFromAndUntilChange>
 * @method StandalonePriceSetValidFromAndUntilChange current()
 * @method StandalonePriceSetValidFromAndUntilChange end()
 * @method StandalonePriceSetValidFromAndUntilChange at($offset)
 */
class StandalonePriceSetValidFromAndUntilChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceSetValidFromAndUntilChange $value
     * @psalm-param StandalonePriceSetValidFromAndUntilChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetValidFromAndUntilChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetValidFromAndUntilChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetValidFromAndUntilChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetValidFromAndUntilChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetValidFromAndUntilChange $data */
                $data = StandalonePriceSetValidFromAndUntilChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
