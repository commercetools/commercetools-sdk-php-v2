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
 * @extends VariantUpdateActionCollection<VariantSetAssetDescriptionAction>
 * @method VariantSetAssetDescriptionAction current()
 * @method VariantSetAssetDescriptionAction end()
 * @method VariantSetAssetDescriptionAction at($offset)
 */
class VariantSetAssetDescriptionActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAssetDescriptionAction $value
     * @psalm-param VariantSetAssetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAssetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAssetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAssetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAssetDescriptionAction $data */
                $data = VariantSetAssetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
