<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Variant\VariantUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends VariantUpdateActionCollection<VariantRemoveImageAction>
 * @method VariantRemoveImageAction current()
 * @method VariantRemoveImageAction end()
 * @method VariantRemoveImageAction at($offset)
 */
class VariantRemoveImageActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantRemoveImageAction $value
     * @psalm-param VariantRemoveImageAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantRemoveImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantRemoveImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantRemoveImageAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantRemoveImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantRemoveImageAction $data */
                $data = VariantRemoveImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
