<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProjectChangeLanguagesActionCollectionModel extends ProjectUpdateActionCollectionModel implements ProjectChangeLanguagesActionCollection {

    /**
     * @param ProjectChangeLanguagesAction $value
     * @return ProjectChangeLanguagesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProjectChangeLanguagesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProjectChangeLanguagesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProjectChangeLanguagesAction) {
            $data = $this->mapData(ProjectChangeLanguagesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
