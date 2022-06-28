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
 * @extends MapperSequence<StandalonePriceDraft>
 * @method StandalonePriceDraft current()
 * @method StandalonePriceDraft end()
 * @method StandalonePriceDraft at($offset)
 */
class StandalonePriceDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert StandalonePriceDraft $value
     * @psalm-param StandalonePriceDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceDraft $data */
                $data = StandalonePriceDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
