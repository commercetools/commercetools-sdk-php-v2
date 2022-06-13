<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Store extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_LANGUAGES = 'languages';
    public const FIELD_DISTRIBUTION_CHANNELS = 'distributionChannels';
    public const FIELD_SUPPLY_CHANNELS = 'supplyChannels';
    public const FIELD_PRODUCT_SELECTIONS = 'productSelections';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Unique ID of the Store.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Store.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Store was initially created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Store was last updated.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique and immutable identifier for the Store.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Store.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Languages configured for the Store.</p>
     *
     * @return null|array
     */
    public function getLanguages();

    /**
     * <p>Product Distribution Channels allowed for the Store.</p>
     *
     * @return null|ChannelReferenceCollection
     */
    public function getDistributionChannels();

    /**
     * <p>Inventory Supply Channels allowed for the Store.</p>
     *
     * @return null|ChannelReferenceCollection
     */
    public function getSupplyChannels();

    /**
     * <p>Controls availability of Products for this Store via active Product Selections.</p>
     * <ul>
     * <li>If empty all Products in the <a href="ctp:api:type:Project">Project</a> are available in this Store.</li>
     * <li>If provided, Products from <code>active</code> Product Selections are available in this Store.</li>
     * </ul>
     *
     * @return null|ProductSelectionSettingCollection
     */
    public function getProductSelections();

    /**
     * <p>Custom fields for the Store.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;

    /**
     * @param ?ChannelReferenceCollection $distributionChannels
     */
    public function setDistributionChannels(?ChannelReferenceCollection $distributionChannels): void;

    /**
     * @param ?ChannelReferenceCollection $supplyChannels
     */
    public function setSupplyChannels(?ChannelReferenceCollection $supplyChannels): void;

    /**
     * @param ?ProductSelectionSettingCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingCollection $productSelections): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
