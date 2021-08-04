<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProjectCategoryRecommendation>
 * @method ProjectCategoryRecommendation current()
 * @method ProjectCategoryRecommendation at($offset)
 */
class ProjectCategoryRecommendationCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectCategoryRecommendation $value
     * @psalm-param ProjectCategoryRecommendation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectCategoryRecommendationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectCategoryRecommendation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectCategoryRecommendation
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectCategoryRecommendation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectCategoryRecommendation $data */
                $data = ProjectCategoryRecommendationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
