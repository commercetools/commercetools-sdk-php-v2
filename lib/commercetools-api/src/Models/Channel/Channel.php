<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Channel extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_ROLES = 'roles';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_REVIEW_RATING_STATISTICS = 'reviewRatingStatistics';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * <p>Unique ID of the Channel.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Channel.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Channel was initially created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Channel was last updated.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
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
     * <p>User-defined unique identifier for the Channel.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Roles of the Channel.</p>
     *
     * @return null|array
     */
    public function getRoles();

    /**
     * <p>Name of the Channel.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the Channel.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Address where the Channel is located (for example, if the Channel is a physical store).</p>
     *
     * @return null|Address
     */
    public function getAddress();

    /**
     * <p>Statistics about the review ratings taken into account for the Channel.</p>
     *
     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    /**
     * <p>Custom Fields defined for the Channel.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>GeoJSON geometry object encoding the geo location of the Channel.</p>
     *
     * @return null|GeoJson
     */
    public function getGeoLocation();

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
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?ReviewRatingStatistics $reviewRatingStatistics
     */
    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?GeoJson $geoLocation
     */
    public function setGeoLocation(?GeoJson $geoLocation): void;
}
