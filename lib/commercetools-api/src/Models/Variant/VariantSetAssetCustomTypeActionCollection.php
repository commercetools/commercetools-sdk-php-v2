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
 * @extends VariantUpdateActionCollection<VariantSetAssetCustomTypeAction>
 * @method VariantSetAssetCustomTypeAction current()
 * @method VariantSetAssetCustomTypeAction end()
 * @method VariantSetAssetCustomTypeAction at($offset)
 */
class VariantSetAssetCustomTypeActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAssetCustomTypeAction $value
     * @psalm-param VariantSetAssetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAssetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAssetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAssetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAssetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAssetCustomTypeAction $data */
                $data = VariantSetAssetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
