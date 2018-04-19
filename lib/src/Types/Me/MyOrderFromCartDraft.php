<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonObject;

interface MyOrderFromCartDraft extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

}
