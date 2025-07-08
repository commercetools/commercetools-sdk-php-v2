<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurrencePolicyDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_SCHEDULE = 'schedule';

    /**
     * <p>User-defined unique identifier for the RecurrencePolicy.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the RecurrencePolicy.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the RecurrencePolicy.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Schedule where the recurrence is defined.</p>
     *

     * @return null|RecurrencePolicyScheduleDraft
     */
    public function getSchedule();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?RecurrencePolicyScheduleDraft $schedule
     */
    public function setSchedule(?RecurrencePolicyScheduleDraft $schedule): void;
}
