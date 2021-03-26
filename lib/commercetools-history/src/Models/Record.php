<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Label\Label;

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
     * <p>Information about the user or the API client who performed the change.</p>
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
     * The value is not identical to the actual array of update actions that was sent to the platform and is not limited to update actions (see, for example, <a href="/general-concepts#optimistic-concurrency-control">Optimistic  Concurrency Control</a>).</p>
     *
     * @return null|ChangeCollection
     */
    public function getChanges();

    /**
     * <p><a href="/types#reference">Reference</a> to the changed resource.</p>
     *
     * @return null|Reference
     */
    public function getResource();

    /**
     * <p><code>true</code> if no change was detected.
     * The version number of the resource can be increased even without any change in the resource.</p>
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
     * @param ?ChangeCollection $changes
     */
    public function setChanges(?ChangeCollection $changes): void;

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void;

    /**
     * @param ?bool $withoutChanges
     */
    public function setWithoutChanges(?bool $withoutChanges): void;
}
