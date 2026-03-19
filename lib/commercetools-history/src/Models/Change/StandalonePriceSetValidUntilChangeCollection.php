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
 * @extends ChangeCollection<StandalonePriceSetValidUntilChange>
 * @method StandalonePriceSetValidUntilChange current()
 * @method StandalonePriceSetValidUntilChange end()
 * @method StandalonePriceSetValidUntilChange at($offset)
 */
class StandalonePriceSetValidUntilChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceSetValidUntilChange $value
     * @psalm-param StandalonePriceSetValidUntilChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetValidUntilChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetValidUntilChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetValidUntilChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetValidUntilChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetValidUntilChange $data */
                $data = StandalonePriceSetValidUntilChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
