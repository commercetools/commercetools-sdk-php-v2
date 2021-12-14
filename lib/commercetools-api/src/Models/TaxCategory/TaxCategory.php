<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface TaxCategory extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_RATES = 'rates';
    public const FIELD_KEY = 'key';

    /**
     * <p>Unique ID of the TaxCategory.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the TaxCategory.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the TaxCategory was initially created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the TaxCategory was last updated.</p>
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
     * <p>Name of the TaxCategory.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>Description of the TaxCategory.</p>
     *
     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Tax rates and subrates of states and countries. Each TaxRate in the array has a unique ID assigned by the platform.</p>
     *
     * @return null|TaxRateCollection
     */
    public function getRates();

    /**
     * <p>User-defined unique identifier for the TaxCategory.</p>
     *
     * @return null|string
     */
    public function getKey();

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
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?TaxRateCollection $rates
     */
    public function setRates(?TaxRateCollection $rates): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
