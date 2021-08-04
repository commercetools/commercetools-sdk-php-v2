<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Product\FacetResultCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends FacetResultCollection<TermFacetResult>
 * @method TermFacetResult current()
 * @method TermFacetResult at($offset)
 */
class TermFacetResultCollection extends FacetResultCollection
{
    /**
     * @psalm-assert TermFacetResult $value
     * @psalm-param TermFacetResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TermFacetResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof TermFacetResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TermFacetResult
     */
    protected function mapper()
    {
        return function (?int $index): ?TermFacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TermFacetResult $data */
                $data = TermFacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
