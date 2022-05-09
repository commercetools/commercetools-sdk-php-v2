<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StandalonePriceUpdate>
 * @method StandalonePriceUpdate current()
 * @method StandalonePriceUpdate end()
 * @method StandalonePriceUpdate at($offset)
 */
class StandalonePriceUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert StandalonePriceUpdate $value
     * @psalm-param StandalonePriceUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceUpdate $data */
                $data = StandalonePriceUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
