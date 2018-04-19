<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

interface ExtensionHttpDestination extends ExtensionDestination
{
    const FIELD_URL = 'url';
    const FIELD_AUTHENTICATION = 'authentication';

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return HttpDestinationAuthentication
     */
    public function getAuthentication();

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url);

    /**
     * @param HttpDestinationAuthentication $authentication
     * @return $this
     */
    public function setAuthentication(HttpDestinationAuthentication $authentication);

}
