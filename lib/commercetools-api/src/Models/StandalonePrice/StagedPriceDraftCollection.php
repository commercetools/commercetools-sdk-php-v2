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
 * @extends MapperSequence<StagedPriceDraft>
 * @method StagedPriceDraft current()
 * @method StagedPriceDraft end()
 * @method StagedPriceDraft at($offset)
 */
class StagedPriceDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedPriceDraft $value
     * @psalm-param StagedPriceDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedPriceDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedPriceDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedPriceDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedPriceDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedPriceDraft $data */
                $data = StagedPriceDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
