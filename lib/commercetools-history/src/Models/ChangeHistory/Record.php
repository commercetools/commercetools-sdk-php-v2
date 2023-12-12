<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\History\Models\Common\KeyReference;
use Commercetools\History\Models\Common\KeyReferenceCollection;
use Commercetools\History\Models\Common\ResourceIdentifier;
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
    public const FIELD_STORES = 'stores';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_WITHOUT_CHANGES = 'withoutChanges';

    /**
     * <p>Version of the resource after the change.</p>
     * <p>For more information on how the version is incremented, see <a href="/../api/general-concepts#optimistic-concurrency-control">Optimistic Concurrency Control</a>.</p>
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
     * <p>Indicates the type of change.
     * For creation, update, or deletion, the value is <code>&quot;ResourceCreated&quot;</code>, <code>&quot;ResourceUpdated&quot;</code>, or <code>&quot;ResourceDeleted&quot;</code> respectively.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>Information about the user or API Client who performed the change.</p>
     *

     * @return null|ModifiedBy
     */
    public function getModifiedBy();

    /**
     * <p>Date and time (UTC) when the change was made.</p>
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
     * <p>Shows the differences in the resource between <code>previousVersion</code> and <code>version</code>.</p>
     * <p>The value is not identical to the actual array of update actions sent and is not limited to update actions (see, for example, <a href="/general-concepts#optimistic-concurrency-control">Optimistic  Concurrency Control</a>).</p>
     *

     * @return null|ChangeCollection
     */
    public function getChanges();

    /**
     * <p>ResourceIdentifier of the changed resource.</p>
     *

     * @return null|ResourceIdentifier
     */
    public function getResource();

    /**
     * <p>References to the <a href="ctp:api:type:Store">Stores</a> associated with the <a href="ctp:history:type:Change">Change</a>.</p>
     *

     * @return null|KeyReferenceCollection
     */
    public function getStores();

    /**
     * <p>Reference to the <a href="ctp:api:type:BusinessUnit">Business Unit</a> associated with the <a href="ctp:history:type:Change">Change</a>.</p>
     *

     * @return null|KeyReference
     */
    public function getBusinessUnit();

    /**
     * <p><code>true</code> if no change was detected.</p>
     * <p>The version number of the resource can be increased even without any change in the resource.</p>
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
     * @param ?ResourceIdentifier $resource
     */
    public function setResource(?ResourceIdentifier $resource): void;

    /**
     * @param ?KeyReferenceCollection $stores
     */
    public function setStores(?KeyReferenceCollection $stores): void;

    /**
     * @param ?KeyReference $businessUnit
     */
    public function setBusinessUnit(?KeyReference $businessUnit): void;

    /**
     * @param ?bool $withoutChanges
     */
    public function setWithoutChanges(?bool $withoutChanges): void;
}
