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
 * @extends MapperSequence<SimilarProductSearchRequestMeta>
 * @method SimilarProductSearchRequestMeta current()
 * @method SimilarProductSearchRequestMeta at($offset)
 */
class SimilarProductSearchRequestMetaCollection extends MapperSequence
{
    /**
     * @psalm-assert SimilarProductSearchRequestMeta $value
     * @psalm-param SimilarProductSearchRequestMeta|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SimilarProductSearchRequestMetaCollection
     */
    public function add($value)
    {
        if (!$value instanceof SimilarProductSearchRequestMeta) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SimilarProductSearchRequestMeta
     */
    protected function mapper()
    {
        return function (?int $index): ?SimilarProductSearchRequestMeta {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SimilarProductSearchRequestMeta $data */
                $data = SimilarProductSearchRequestMetaModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
