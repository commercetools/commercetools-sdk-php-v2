<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\HttpDestinationAuthenticationCollection;


interface AzureFunctionsAuthenticationCollection extends HttpDestinationAuthenticationCollection
{
    /**
     * @param $index
     * @return AzureFunctionsAuthentication
     */
    public function at($index);

    /**
     * @return AzureFunctionsAuthentication
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AzureFunctionsAuthentication
     */
    public function map($data, $index);
}
