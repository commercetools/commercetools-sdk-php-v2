<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\Type\CustomFields;
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
     * <p>The unique ID of the channel.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Any arbitrary string key that uniquely identifies this channel within the project.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The roles of this channel.
     * Each channel must have at least one role.</p>
     *
     * @return null|array
     */
    public function getRoles();

    /**
     * <p>A human-readable name of the channel.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>A human-readable description of the channel.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>The address where this channel is located (e.g.
     * if the channel is a physical store).</p>
     *
     * @return null|Address
     */
    public function getAddress();

    /**
     * <p>Statistics about the review ratings taken into account for this channel.</p>
     *
     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>A GeoJSON geometry object encoding the geo location of the channel.</p>
     *
     * @return null|GeoJson
     */
    public function getGeoLocation();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setRoles(?array $roles): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setAddress(?Address $address): void;

    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void;

    public function setCustom(?CustomFields $custom): void;

    public function setGeoLocation(?GeoJson $geoLocation): void;
}
