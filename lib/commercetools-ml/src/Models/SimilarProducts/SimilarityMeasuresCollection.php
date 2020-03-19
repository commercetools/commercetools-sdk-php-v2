<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SimilarityMeasures>
 * @method SimilarityMeasures current()
 * @method SimilarityMeasures at($offset)
 */
class SimilarityMeasuresCollection extends MapperSequence
{
    /**
     * @psalm-assert SimilarityMeasures $value
     * @psalm-param SimilarityMeasures|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SimilarityMeasuresCollection
     */
    public function add($value)
    {
        if (!$value instanceof SimilarityMeasures) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SimilarityMeasures
     */
    protected function mapper()
    {
        return function (int $index): ?SimilarityMeasures {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SimilarityMeasuresModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
