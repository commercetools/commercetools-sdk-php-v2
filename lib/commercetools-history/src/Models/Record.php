<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Record extends JsonObject
{

    public const FIELD_VERSION = 'version';
    public const FIELD_PREVIOUS_VERSION = 'previousVersion';
    public const FIELD_TYPE = 'type';
    public const FIELD_MODIFIED_BY = 'modifiedBy';
    public const FIELD_MODIFIED_AT = 'modifiedAt';
    public const FIELD_LABEL = 'label';
    public const FIELD_PREVIOUS_LABEL = 'previousLabel';
    public const FIELD_CHANGES = 'changes';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_WITHOUT_CHANGES = 'withoutChanges';

    /**
     * <p>Version of the resource after the change.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Version of the resource before the change.</p>
     *
     * @return null|int
     */
    public function getPreviousVersion();

    /**
     * <p>Type of the change (creation, update or deletion).</p>
     *
     * @return null|string
     */
    public function getType();

    /**
     * <p>Information about the user or the client who performed the change.</p>
     *
     * @return null|ModifiedBy
     */
    public function getModifiedBy();

    /**
     * <p>Date and time when the change was made.</p>
     *
     * @return null|string
     */
    public function getModifiedAt();

    /**
     * <p>Information that describes the resource after the change.</p>
     *
     * @return null|Label
     */
    public function getLabel();

    /**
     * <p>Information that describes the resource before the change.</p>
     *
     * @return null|Label
     */
    public function getPreviousLabel();

    /**
     * <p>Shows the differences in the resource between <code>previousVersion</code> and <code>version</code>.
     * The value is not designed to represent the actual array of update actions that was sent to the platform nor is limited to update actions (see, for example, <a href="/general-concepts#optimistic-concurrency-control">Optimistic  Concurrency Control</a>).</p>
     *
     * @return null|ActionCollection
     */
    public function getChanges();

    /**
     * <p><a href="/types#reference">Reference</a> to the changed resource.</p>
     *
     * @return null|Reference
     */
    public function getResource();

    /**
     * <p><code>true</code> if no change was detected.</p>
     *
     * @return null|bool
     */
    public function getWithoutChanges();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?int $previousVersion
     */
    public function setPreviousVersion(?int $previousVersion): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?ModifiedBy $modifiedBy
     */
    public function setModifiedBy(?ModifiedBy $modifiedBy): void;

    /**
     * @param ?string $modifiedAt
     */
    public function setModifiedAt(?string $modifiedAt): void;

    /**
     * @param ?Label $label
     */
    public function setLabel(?Label $label): void;

    /**
     * @param ?Label $previousLabel
     */
    public function setPreviousLabel(?Label $previousLabel): void;

    /**
     * @param ?ActionCollection $changes
     */
    public function setChanges(?ActionCollection $changes): void;

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void;

    /**
     * @param ?bool $withoutChanges
     */
    public function setWithoutChanges(?bool $withoutChanges): void;
}
