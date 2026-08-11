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
 * @extends VariantUpdateActionCollection<VariantSetKeyAction>
 * @method VariantSetKeyAction current()
 * @method VariantSetKeyAction end()
 * @method VariantSetKeyAction at($offset)
 */
class VariantSetKeyActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetKeyAction $value
     * @psalm-param VariantSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetKeyAction $data */
                $data = VariantSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
