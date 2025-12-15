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
 * @extends ChangeCollection<StandalonePriceSetValidFromChange>
 * @method StandalonePriceSetValidFromChange current()
 * @method StandalonePriceSetValidFromChange end()
 * @method StandalonePriceSetValidFromChange at($offset)
 */
class StandalonePriceSetValidFromChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceSetValidFromChange $value
     * @psalm-param StandalonePriceSetValidFromChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetValidFromChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetValidFromChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetValidFromChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetValidFromChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetValidFromChange $data */
                $data = StandalonePriceSetValidFromChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
