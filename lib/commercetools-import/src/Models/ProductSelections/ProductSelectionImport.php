<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Customfields\Custom;

interface ProductSelectionImport extends ImportResource
{
    public const FIELD_NAME = 'name';
    public const FIELD_MODE = 'mode';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_ASSIGNMENTS = 'assignments';

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:ProductSelection">ProductSelection</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>ProductSelection.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>ProductSelection.mode</code>.</p>
     *

     * @return null|string
     */
    public function getMode();

    /**
     * <p>Maps to <code>ProductSelection.custom</code>.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

    /**
     * <p>List of product assignments.</p>
     *

     * @return null|ProductSelectionAssignmentCollection
     */
    public function getAssignments();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;

    /**
     * @param ?ProductSelectionAssignmentCollection $assignments
     */
    public function setAssignments(?ProductSelectionAssignmentCollection $assignments): void;
}
