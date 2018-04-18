<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollection;


interface ProjectChangeCountriesActionCollection extends ProjectUpdateActionCollection {
    /**
     * @param $index
     * @return ProjectChangeCountriesAction
     */
    public function at($index);

    /**
     * @return ProjectChangeCountriesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProjectChangeCountriesAction
     */
    public function map($data, $index);
}
