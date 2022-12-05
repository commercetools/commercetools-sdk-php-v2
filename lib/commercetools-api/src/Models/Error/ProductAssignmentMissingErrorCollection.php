<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<ProductAssignmentMissingError>
 * @method ProductAssignmentMissingError current()
 * @method ProductAssignmentMissingError end()
 * @method ProductAssignmentMissingError at($offset)
 */
class ProductAssignmentMissingErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ProductAssignmentMissingError $value
     * @psalm-param ProductAssignmentMissingError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductAssignmentMissingErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAssignmentMissingError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAssignmentMissingError
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductAssignmentMissingError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductAssignmentMissingError $data */
                $data = ProductAssignmentMissingErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
