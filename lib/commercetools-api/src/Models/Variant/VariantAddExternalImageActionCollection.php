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
 * @extends VariantUpdateActionCollection<VariantAddExternalImageAction>
 * @method VariantAddExternalImageAction current()
 * @method VariantAddExternalImageAction end()
 * @method VariantAddExternalImageAction at($offset)
 */
class VariantAddExternalImageActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantAddExternalImageAction $value
     * @psalm-param VariantAddExternalImageAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantAddExternalImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantAddExternalImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantAddExternalImageAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantAddExternalImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantAddExternalImageAction $data */
                $data = VariantAddExternalImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
