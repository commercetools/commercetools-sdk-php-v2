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
 * @extends VariantUpdateActionCollection<VariantPublishAction>
 * @method VariantPublishAction current()
 * @method VariantPublishAction end()
 * @method VariantPublishAction at($offset)
 */
class VariantPublishActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantPublishAction $value
     * @psalm-param VariantPublishAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantPublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantPublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantPublishAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantPublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantPublishAction $data */
                $data = VariantPublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
