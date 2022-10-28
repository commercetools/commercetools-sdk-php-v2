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
 * @extends MapperSequence<StagedStandalonePrice>
 * @method StagedStandalonePrice current()
 * @method StagedStandalonePrice end()
 * @method StagedStandalonePrice at($offset)
 */
class StagedStandalonePriceCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedStandalonePrice $value
     * @psalm-param StagedStandalonePrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedStandalonePriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedStandalonePrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedStandalonePrice
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedStandalonePrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedStandalonePrice $data */
                $data = StagedStandalonePriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
