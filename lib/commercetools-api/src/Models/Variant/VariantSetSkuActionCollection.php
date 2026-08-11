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
 * @extends VariantUpdateActionCollection<VariantSetSkuAction>
 * @method VariantSetSkuAction current()
 * @method VariantSetSkuAction end()
 * @method VariantSetSkuAction at($offset)
 */
class VariantSetSkuActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetSkuAction $value
     * @psalm-param VariantSetSkuAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetSkuActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetSkuAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetSkuAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetSkuAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetSkuAction $data */
                $data = VariantSetSkuActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
