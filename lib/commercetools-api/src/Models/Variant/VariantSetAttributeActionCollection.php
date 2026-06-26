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
 * @extends VariantUpdateActionCollection<VariantSetAttributeAction>
 * @method VariantSetAttributeAction current()
 * @method VariantSetAttributeAction end()
 * @method VariantSetAttributeAction at($offset)
 */
class VariantSetAttributeActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAttributeAction $value
     * @psalm-param VariantSetAttributeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAttributeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAttributeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAttributeAction $data */
                $data = VariantSetAttributeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
