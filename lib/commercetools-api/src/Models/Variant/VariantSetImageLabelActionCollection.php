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
 * @extends VariantUpdateActionCollection<VariantSetImageLabelAction>
 * @method VariantSetImageLabelAction current()
 * @method VariantSetImageLabelAction end()
 * @method VariantSetImageLabelAction at($offset)
 */
class VariantSetImageLabelActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetImageLabelAction $value
     * @psalm-param VariantSetImageLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetImageLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetImageLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetImageLabelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetImageLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetImageLabelAction $data */
                $data = VariantSetImageLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
