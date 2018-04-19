<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProjectChangeCountriesActionCollectionModel extends ProjectUpdateActionCollectionModel implements ProjectChangeCountriesActionCollection
{

    /**
     * @param ProjectChangeCountriesAction $value
     * @return ProjectChangeCountriesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProjectChangeCountriesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProjectChangeCountriesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProjectChangeCountriesAction) {
            $data = $this->mapData(ProjectChangeCountriesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
