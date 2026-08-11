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
 * @extends MapperSequence<McpServerJsonOutputFiltering>
 * @method McpServerJsonOutputFiltering current()
 * @method McpServerJsonOutputFiltering end()
 * @method McpServerJsonOutputFiltering at($offset)
 */
class McpServerJsonOutputFilteringCollection extends MapperSequence
{
    /**
     * @psalm-assert McpServerJsonOutputFiltering $value
     * @psalm-param McpServerJsonOutputFiltering|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerJsonOutputFilteringCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerJsonOutputFiltering) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerJsonOutputFiltering
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerJsonOutputFiltering {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerJsonOutputFiltering $data */
                $data = McpServerJsonOutputFilteringModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
