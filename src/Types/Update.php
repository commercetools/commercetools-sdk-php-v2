<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\JsonObject;

interface Update extends JsonObject {
    const FIELD_VERSION = 'version';
    const FIELD_ACTIONS = 'actions';

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return UpdateActionCollection
     */
    public function getActions();

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

    /**
     * @param UpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
