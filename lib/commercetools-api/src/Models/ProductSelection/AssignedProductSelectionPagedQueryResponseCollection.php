<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssignedProductSelectionPagedQueryResponse>
 * @method AssignedProductSelectionPagedQueryResponse current()
 * @method AssignedProductSelectionPagedQueryResponse end()
 * @method AssignedProductSelectionPagedQueryResponse at($offset)
 */
class AssignedProductSelectionPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert AssignedProductSelectionPagedQueryResponse $value
     * @psalm-param AssignedProductSelectionPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssignedProductSelectionPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssignedProductSelectionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssignedProductSelectionPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?AssignedProductSelectionPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssignedProductSelectionPagedQueryResponse $data */
                $data = AssignedProductSelectionPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
