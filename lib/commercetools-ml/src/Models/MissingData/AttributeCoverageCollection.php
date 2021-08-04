<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeCoverage>
 * @method AttributeCoverage current()
 * @method AttributeCoverage at($offset)
 */
class AttributeCoverageCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeCoverage $value
     * @psalm-param AttributeCoverage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeCoverageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeCoverage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeCoverage
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeCoverage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeCoverage $data */
                $data = AttributeCoverageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
