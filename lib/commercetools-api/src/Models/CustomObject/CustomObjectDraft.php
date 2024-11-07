<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomObjectDraft extends JsonObject
{
    public const FIELD_CONTAINER = 'container';
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';
    public const FIELD_VERSION = 'version';

    /**
     * <p>Namespace to group CustomObjects.</p>
     *

     * @return null|string
     */
    public function getContainer();

    /**
     * <p>User-defined unique identifier of the CustomObject within the defined <code>container</code>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Can be any JSON standard type, such as number, string, boolean, array, object, or a <a href="/../api/types">common API data type</a>.</p>
     * <ul>
     * <li>Fields within <code>value</code> that have <code>null</code> values <strong>are not saved</strong>.</li>
     * <li>For values of type <a href="ctp:api:type:Reference">Reference</a> the integrity of the data is not guaranteed. If the referenced object is deleted, the API does not delete the corresponding reference to it and the <code>value</code> points to a non-existing object in such case.</li>
     * </ul>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * <p>Current version of the CustomObject.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * @param ?string $container
     */
    public function setContainer(?string $container): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;
}
