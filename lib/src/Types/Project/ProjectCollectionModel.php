<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProjectCollectionModel extends JsonCollection implements ProjectCollection {

    /**
     * @param Project $value
     * @return ProjectCollection
     */
    public function add($value) {
        if (!$value instanceof Project) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Project
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Project) {
            $data = $this->mapData(Project::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
