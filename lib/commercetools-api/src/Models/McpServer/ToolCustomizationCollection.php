<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ToolCustomization>
 * @method ToolCustomization current()
 * @method ToolCustomization end()
 * @method ToolCustomization at($offset)
 */
class ToolCustomizationCollection extends MapperSequence
{
    /**
     * @psalm-assert ToolCustomization $value
     * @psalm-param ToolCustomization|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ToolCustomizationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ToolCustomization) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ToolCustomization
     */
    protected function mapper()
    {
        return function (?int $index): ?ToolCustomization {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ToolCustomization $data */
                $data = ToolCustomizationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
