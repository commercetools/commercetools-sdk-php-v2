<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SearchIndexingConfiguration>
 * @method SearchIndexingConfiguration current()
 * @method SearchIndexingConfiguration at($offset)
 */
class SearchIndexingConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchIndexingConfiguration $value
     * @psalm-param SearchIndexingConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchIndexingConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchIndexingConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchIndexingConfiguration
     */
    protected function mapper()
    {
        return function (int $index): ?SearchIndexingConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchIndexingConfiguration $data */
                $data = SearchIndexingConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
