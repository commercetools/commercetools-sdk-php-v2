<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PriceDraft>
 * @method PriceDraft current()
 * @method PriceDraft at($offset)
 */
class PriceDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceDraft $value
     * @psalm-param PriceDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?PriceDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PriceDraft $data */
                $data = PriceDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
