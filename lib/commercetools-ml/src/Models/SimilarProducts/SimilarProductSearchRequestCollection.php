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
 * @extends MapperSequence<SimilarProductSearchRequest>
 * @method SimilarProductSearchRequest current()
 * @method SimilarProductSearchRequest end()
 * @method SimilarProductSearchRequest at($offset)
 */
class SimilarProductSearchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert SimilarProductSearchRequest $value
     * @psalm-param SimilarProductSearchRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SimilarProductSearchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof SimilarProductSearchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SimilarProductSearchRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?SimilarProductSearchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SimilarProductSearchRequest $data */
                $data = SimilarProductSearchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
