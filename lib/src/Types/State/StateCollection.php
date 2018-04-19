<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\Common\ResourceCollection;


interface StateCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return State
     */
    public function at($index);

    /**
     * @return State
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return State
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return State
     */
    public function byId($id);

}
