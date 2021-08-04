<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<FacetResults>
 * @method FacetResults current()
 * @method FacetResults end()
 * @method FacetResults at($offset)
 */
class FacetResultsCollection extends MapperSequence
{
    /**
     * @psalm-assert FacetResults $value
     * @psalm-param FacetResults|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FacetResultsCollection
     */
    public function add($value)
    {
        if (!$value instanceof FacetResults) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FacetResults
     */
    protected function mapper()
    {
        return function (?int $index): ?FacetResults {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FacetResults $data */
                $data = FacetResultsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
