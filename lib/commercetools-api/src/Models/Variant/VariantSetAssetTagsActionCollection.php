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
 * @extends VariantUpdateActionCollection<VariantSetAssetTagsAction>
 * @method VariantSetAssetTagsAction current()
 * @method VariantSetAssetTagsAction end()
 * @method VariantSetAssetTagsAction at($offset)
 */
class VariantSetAssetTagsActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAssetTagsAction $value
     * @psalm-param VariantSetAssetTagsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAssetTagsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAssetTagsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAssetTagsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAssetTagsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAssetTagsAction $data */
                $data = VariantSetAssetTagsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
