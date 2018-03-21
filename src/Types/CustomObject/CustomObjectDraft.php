<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Base\JsonObject;

interface CustomObjectDraft extends JsonObject {
    const FIELD_CONTAINER = 'container';
    const FIELD_KEY = 'key';
    const FIELD_VALUE = 'value';
    const FIELD_VERSION = 'version';

    /**
     * @return string
     */
    public function getContainer();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @param string $container
     * @return $this
     */
    public function setContainer(string $container);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

}
