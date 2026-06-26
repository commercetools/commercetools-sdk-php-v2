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
 * @extends VariantUpdateActionCollection<VariantRemoveAssetAction>
 * @method VariantRemoveAssetAction current()
 * @method VariantRemoveAssetAction end()
 * @method VariantRemoveAssetAction at($offset)
 */
class VariantRemoveAssetActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantRemoveAssetAction $value
     * @psalm-param VariantRemoveAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantRemoveAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantRemoveAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantRemoveAssetAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantRemoveAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantRemoveAssetAction $data */
                $data = VariantRemoveAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
