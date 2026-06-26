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
 * @extends VariantUpdateActionCollection<VariantAddAssetAction>
 * @method VariantAddAssetAction current()
 * @method VariantAddAssetAction end()
 * @method VariantAddAssetAction at($offset)
 */
class VariantAddAssetActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantAddAssetAction $value
     * @psalm-param VariantAddAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantAddAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantAddAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantAddAssetAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantAddAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantAddAssetAction $data */
                $data = VariantAddAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
