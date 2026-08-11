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
 * @extends VariantUpdateActionCollection<VariantSetAttributesAction>
 * @method VariantSetAttributesAction current()
 * @method VariantSetAttributesAction end()
 * @method VariantSetAttributesAction at($offset)
 */
class VariantSetAttributesActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAttributesAction $value
     * @psalm-param VariantSetAttributesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAttributesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAttributesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAttributesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAttributesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAttributesAction $data */
                $data = VariantSetAttributesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
