<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollection;


interface ProjectChangeNameActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @param $index
     * @return ProjectChangeNameAction
     */
    public function at($index);

    /**
     * @return ProjectChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProjectChangeNameAction
     */
    public function map($data, $index);
}
