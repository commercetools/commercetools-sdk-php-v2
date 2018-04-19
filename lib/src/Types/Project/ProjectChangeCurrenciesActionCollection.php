<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollection;


interface ProjectChangeCurrenciesActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @param $index
     * @return ProjectChangeCurrenciesAction
     */
    public function at($index);

    /**
     * @return ProjectChangeCurrenciesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProjectChangeCurrenciesAction
     */
    public function map($data, $index);
}
