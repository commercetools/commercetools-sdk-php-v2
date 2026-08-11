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
 * @extends VariantUpdateActionCollection<VariantSetAssetCustomFieldAction>
 * @method VariantSetAssetCustomFieldAction current()
 * @method VariantSetAssetCustomFieldAction end()
 * @method VariantSetAssetCustomFieldAction at($offset)
 */
class VariantSetAssetCustomFieldActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAssetCustomFieldAction $value
     * @psalm-param VariantSetAssetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAssetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAssetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAssetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAssetCustomFieldAction $data */
                $data = VariantSetAssetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
